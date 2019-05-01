#!/usr/bin/env bash
set -o nounset
set -o errexit
set -o pipefail

cd blog
composerBin="./composer.phar"
imagePath="./html/assets/img"

if [[ ! -x "$composerBin" ]]; then
    echo "Downloading composer..."
    curl -s https://getcomposer.org/installer | php
    chmod +x $composerBin
    cp composer.phar composer
else
    $composerBin self-update
fi
cd ../

find $imagePath -type d -exec sh -c ' ls "$0"/*.jpg 2>/dev/null && jpegoptim --strip-all -t "$0"/*.jpg ' {} \;
