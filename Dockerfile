FROM python:3-alpine

WORKDIR /Portfolio
COPY . .

RUN pip install -r requirements.txt

ENTRYPOINT FLASK_APP=Portfolio FLASK_ENV=production flask run --host=0.0.0.0
