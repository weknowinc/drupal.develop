FROM node:8.11.3-alpine

ENV NPM_CONFIG_LOGLEVEL warn

WORKDIR /usr/app

COPY package.json package-lock.json ./
RUN npm install
COPY . ./

CMD ["npm", "run", "start"]

EXPOSE 3000