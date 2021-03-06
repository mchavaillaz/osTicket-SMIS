<?php
/*********************************************************************
 * faq.php
 *
 * FAQs Clients' interface..
 *
 * Peter Rotich <peter@osticket.com>
 * Copyright (c)  2006-2013 osTicket
 * http://www.osticket.com
 *
 * Released under the GNU General Public License WITHOUT ANY WARRANTY.
 * See LICENSE.TXT for details.
 *
 * vim: expandtab sw=4 ts=4 sts=4:
 **********************************************************************/
require('kb.inc.php');
require_once(INCLUDE_DIR . 'class.faq.php');
require_once(INCLUDE_DIR . 'SMISUtilities.php');

// Tools
$smisUtilities = new SMISUtilities();
$faq = $category = null;

if ($_REQUEST['id'] && !($faq = FAQ::lookup($_REQUEST['id'])))
    $errors['err'] = sprintf(__('%s: Unknown or invalid'), __('FAQ article'));

if (!$faq && $_REQUEST['cid'] && !($category = Category::lookup($_REQUEST['cid'])))
    $errors['err'] = sprintf(__('%s: Unknown or invalid'), __('FAQ category'));

$inc = 'knowledgebase.inc.php'; //FAQs landing page.
if ($faq && $faq->isPublished()) {
    $inc = 'faq.custom.inc.php';
} else if ($category && $category->isPublic() && $_REQUEST['a'] != 'search') {
    $inc = 'faq-category.custom.inc.php';
}
require_once(CLIENTINC_DIR . 'header.custom.inc.php');
require_once(CLIENTINC_DIR . $inc);
require_once(CLIENTINC_DIR . 'footer.custom.inc.php');
?>
