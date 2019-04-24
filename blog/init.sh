#!/usr/bin/env bash
set -o nounset
set -o errexit
set -o pipefail

composerBin="./composer"

if [[ ! -x "$composerBin" ]]; then
    echo "Downloading composer..."
    curl -s https://getcomposer.org/installer | php
    mv composer.phar composer
    chmod +x $composerBin
else
    $composerBin self-update
fi

echo "Installing sculpin dependencies"
$composerBin install --no-dev
