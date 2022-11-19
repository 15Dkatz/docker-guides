#!/bin/bash

psql -c "\copy apparel FROM '/example.csv' delimiter '|' csv"
