from flask import Flask, render_template
from datetime import datetime
import json

app = Flask(__name__)


@app.context_processor
def inject_now():
    return {'now': datetime.utcnow()}


@app.route('/')
def home():
    return render_template('home.html')


@app.route('/cv/')
def cv():
    return render_template('cv.html')


@app.route('/projects/', defaults={'tag': None})
@app.route('/projects/<tag>/')
def projects(tag):
    file = app.open_resource('static/json/projects.json')
    projectsList = [p for p in json.loads(file.read()) if tag is None or ('tags' in p and tag in p['tags'])]
    file.close()
    return render_template('projects.html', projectsList=projectsList, tag=tag)


if __name__ == '__main__':
    app.run(debug=True)
