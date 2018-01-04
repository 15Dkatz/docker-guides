FROM node
COPY package.json package.json
RUN npm install
COPY ./app ./app
CMD ["node", "app/server.js"]