FROM postgres

ENV POSTGRES_HOST_AUTH_METHOD=trust

COPY ./example.csv /example.csv
COPY ./0_init.sql /docker-entrypoint-initdb.d/
COPY ./1_init.sh /docker-entrypoint-initdb.d/

