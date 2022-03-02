from Portfolio import app
from flask import render_template, request, session, redirect, url_for, send_from_directory, abort
from werkzeug.security import check_password_hash
from datetime import datetime
import json


@app.context_processor
def inject_now():
    return {'now': datetime.utcnow()}


@app.route('/')
def home():
    return render_template('home.html')


@app.route('/cv/')
def cv():
    return render_template('cv.html')


@app.route('/auth/', methods=['POST'])
def auth():
    session.clear()

    password_hash = 'pbkdf2:sha256' \
                    ':260000$R789XfRxLyCJv3ya$678c1fe2f8827367fb29dcb4998a99e02ff85968c806134c2d6351095d0508ba'
    password = request.form.get('password', None)
    if password is None or password == '':
        pass
    elif check_password_hash(password_hash, password):
        session['auth'] = True
    else:
        session['auth'] = False

    return redirect(url_for('cv'))


@app.route('/projects/', defaults={'tag': None})
@app.route('/projects/<tag>/')
def projects(tag):
    with app.open_resource('static/json/projects.json') as file:
        projectsList = [p for p in json.load(file) if tag is None or ('tags' in p and tag in p['tags'])]
    return render_template('projects.html', projectsList=projectsList, tag=tag)


@app.route('/data/Thesis.pdf')
def thesis():
    try:
        return send_from_directory(directory=app.config['DATA_FOLDER'], path='Thesis.pdf', as_attachment=False)
    except FileNotFoundError:
        abort(404)
