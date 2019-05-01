#!/usr/bin/env bash
set -o nounset
set -o errexit
set -o pipefail

cd blog
composerBin="./composer.phar"

if [[ ! -x "$composerBin" ]]; then
    echo "Downloading composer..."
    curl -s https://getcomposer.org/installer | php
    chmod +x $composerBin
    cp composer.phar composer
else
    $composerBin self-update
fi
cd ../
