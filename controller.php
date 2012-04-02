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
    $sort_subpages = SinglePage::add('dashboard/sitemap/sort_subpages');
    if ($sort_subpages) {
      $sort_subpages->update(array('cName' =>'Sort Subpages', 'cDescription' => 'Sort Subpages of any page on your websites sitemap'));
    }
  }

  public function uninstall() {
    $pkg = parent::uninstall();

    //Loader::model('single_page');
    //$main_page = SinglePage::remove('dashboard/adk');
    //$main_page->update(array('cName' =>'ADK', 'cDescription' => 'Manage attribute Display Groups'));
  }
} 
