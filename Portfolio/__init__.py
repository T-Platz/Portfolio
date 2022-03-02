from flask import Flask

app = Flask(__name__)

# try to load config from file
try:
    app.config.from_object("instance.config.DevelopmentConfig")
except ImportError:
    # fallback config
    print('Config file not found, using default config')
    app.config.update(
        DEBUG=True,
        ENV='development',
        SECRET_KEY='Very Secret Key',
        DATA_FOLDER='data'
    )

from Portfolio import views
