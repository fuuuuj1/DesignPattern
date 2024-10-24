# ベースイメージにPHPのイメージを指定
FROM php:8.3-cli

# php unitをインストールするのに必要なパッケージをインストール
RUN apt-get update && apt-get install -y \
    wget \
    git \
    unzip \
    libzip-dev

COPY --from=composer /usr/bin/composer /usr/bin/composer

# 作業ディレクトリを指定
WORKDIR /app