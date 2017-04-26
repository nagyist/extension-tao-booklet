<?php
/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * Copyright (c) 2015 (original work) Open Assessment Technologies SA;
 */

use oat\taoBooklet\model\export\PdfBookletExporter;
use oat\tao\helpers\Template;
$guessPath = PdfBookletExporter::guessWhereWkhtmltopdfInstalled();

/**
 * Configuration for wkhtmltopdf tool
 */
return array(
    'binary'  => $guessPath ? $guessPath : 'wkhtmltopdf',
    'options' => array(
        'header-html'      => Template::getTemplate('PrintTest' . DIRECTORY_SEPARATOR . 'header.html', 'taoBooklet'),
        'footer-html'      => Template::getTemplate('PrintTest' . DIRECTORY_SEPARATOR . 'footer.html', 'taoBooklet'),
        'margin-bottom'    => '10mm',
        'margin-top'       => '10mm',

        // the page size format: A4, Letter, etc.
        'page-size' => 'A4',

        // the page orientation: Portrait or Landscape
        'orientation' => 'Portrait',
    )
);
