<?php defined('C5_EXECUTE') or die("Access Denied.");

/**
 * @author Stratus3D
 *
 */
class SortSubpagesPackage extends Package {
  protected $pkgHandle = 'sort_subpages';
  protected $appVersionRequired = '5.5.1';
  protected $pkgVersion = '0.9.0';
		
  public function getPackageDescription() {
    return t("Manages the displays the value of page attributes.");
  }

  public function getPackageName() {
    return t("Sort Subpages");
  }

  public function install() {
    $pkg = parent::install();

    Loader::model('single_page');
    $main_page = SinglePage::add('dashboard/sitemap/sort_subpages');
    if ($main_page) {
      $main_page->update(array('cName' =>'ADK', 'cDescription' => 'Manage attribute display groups'));
    }

    $group_page = SinglePage::add('dashboard/adk/attribute-display-groups');
    if ($group_page) {
    $group_page->update(array('cName' =>'Attribute Display Groups', 'cDescription' => 'Manage attribute display groups'));
  }

  public function uninstall() {
    $pkg = parent::uninstall();

    Loader::model('single_page');
    //$main_page = SinglePage::remove('dashboard/adk');
    //$main_page->update(array('cName' =>'ADK', 'cDescription' => 'Manage attribute Display Groups'));
  }
} 
