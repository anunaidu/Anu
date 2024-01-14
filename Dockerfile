FROM php:7.0-apache

LABEL "com.github.actions.name" = "websites"
LABEL "com.github.actions.description" = "Launch websites"
LABEL "com.github.actions.icon" = "edit"
LABEL "com.github.actions.color" = "gray-dark"

LABEL "repository" = "https://github.com/anunaidu/Anu"
LABEL "homepage" = "https://github.com/anunaidu/Anu"
LABEL maintainer="anu.a <mahi.naidu770@gmail.com>"
LABEL version="1.0.0"

WORKDIR /var/www/html
COPY Src/ /var/www/html
EXPOSE 80
