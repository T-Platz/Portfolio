from flask import Flask

app = Flask(__name__)
app.config.from_object("instance.config.DevelopmentConfig")

from Portfolio import views
