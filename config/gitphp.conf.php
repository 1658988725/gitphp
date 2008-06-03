<?php
/*
 *  config.inc.php
 *  gitphp: A PHP git repository browser
 *  Component: Configuration
 *
 *  Copyright (C) 2006 Christopher Han <xiphux@gmail.com>
 */

/*
 * stylesheet
 * Path to page stylesheet
 */
$gitphp_conf['stylesheet'] = "gitphp.css";

/*
 * projectroot
 * Absolute filesystem path prepended to project paths
 * (don't forget trailing slash!)
 */
$gitphp_conf['projectroot'] = "/git/";

/*
 * gitbin
 * Path to git binary
 * For example, /usr/bin/git on Linux
 * or C:\\Program Files\\Git\\cmd\\git.cmd on Windows
 * with msysgit.  You can also omit the full path and just
 * use the executable name to search the user's $PATH.
 * Note: Versions of PHP below 5.2 have buggy handling of spaces
 * in paths.  Use the 8.3 version of the filename if you're
 * having trouble, e.g. C:\\Progra~1\\Git\\cmd\\git.cmd
 */
$gitphp_conf['gitbin'] = "/usr/bin/git";

/*
 * diffbin
 * Path to diff binary
 * Same rules as gitbin
 */
$gitphp_conf['diffbin'] = "/usr/bin/diff";

/*
 * gittmp
 * Location for temporary files for diffs
 * (don't forget trailing slash!)
 */
$gitphp_conf['gittmp'] = "/tmp/gitphp/";

/*
 * title
 * The string that will be used as the page title
 * The variable '$gitphp_appstring' will expand to
 * the name (gitphp) and version
 * The variable '$gitphp_version' will expand to the
 * version number only
 */
$gitphp_conf['title'] = "centraldogma :: $gitphp_appstring";

/*
 * self
 * This is the path to the script that will be inserted
 * in urls.
 * If only specifying the directory path (and omitting the
 * index.php filename), make sure to include the trailing
 * slash!
 */
$gitphp_conf['self'] = "http://centraldogma/gitphp/";

/*
 * smarty_prefix
 * This is the prefix where smarty is installed.
 * (including trailing slash)
 * If an absolute (starts with /) path is given,
 * Smarty.class.php will be searched for in that directory.
 * If a relative (doesn't start with /) path is given,
 * that subdirectory inside the php include dirs will be
 * searched.  So, for example, if you specify the path as
 * "/usr/share/Smarty/" then the script will look for
 * /usr/share/Smarty/Smarty.class.php.
 * If you specify the path as "smarty/" then it will search
 * the include directories in php.ini's include_path directive,
 * so it would search in places like /usr/share/php and /usr/lib/php:
 * /usr/share/php/smarty/Smarty.class.php,
 * /usr/lib/php/smarty/Smarty.class.php, etc.
 * Leave blank to just search in the root of the php include directories
 * like /usr/share/php/Smarty.class.php, /usr/lib/php/Smarty.class.php, etc.
 */
$gitphp_conf['smarty_prefix'] = "smarty/";

/*
 * bzsnapshots
 * If set to true, will bzcompress snapshot tars before sending them.
 * Your PHP must have been compiled with bzip2 support!
 */
$gitphp_conf['bzsnapshots'] = TRUE;

/*
 * bzblocksize
 * Sets the compression level for bzip2.  Ranges from 1-9, with
 * 9 being the most compression but requiring the most processing
 * (bzip defaults to 4)
 */
$gitphp_conf['bzblocksize'] = 9;

/*
 * geshi
 * Run blob output through geshi syntax highlighting
 * and line numbering
 */
$gitphp_conf['geshi'] = TRUE;

/*
 * geshiroot
 * Directory where geshi is installed
 * NOTE: this is the path to the base geshi.php file to include,
 * NOT the various other geshi php source files!
 * Leave blank if geshi.php is in the gitphp root
 * (don't forget trailing slash!)
 */
$gitphp_conf['geshiroot'] = "geshi/";

/*
 * git_projects
 * Two-dimensional array list of projects
 * First array index is the name of the category the projects
 * belong to, and the second array index is a human-readable
 * name for the project (not used, just for organizational
 * purposes), and the value is the path to the project
 * (minus the projectroot).
 * Any projects belonging to the special category "none"
 * will be listed without a category.
 * Comment out $git_projects (leave null) to attempt to read all
 * projects in the projectroot.
 */
$git_projects['Core']['FBX'] = "core/fbx.git";
$git_projects['Core']['Mvm'] = "core/mvm.git";
$git_projects['Core']['PySoulforge'] = "core/pysoulforge.git";
$git_projects['Core']['Scripts'] = "core/scripts.git";
$git_projects['Core']['Soulforge'] = "core/soulforge.git";
$git_projects['Core']['XNSS'] = "core/xnss.git";
$git_projects['Core']['XNSS_old'] = "core/xnss_old.git";
$git_projects['PHP']['Codex'] = "php/codex.git";
$git_projects['PHP']['gitphp'] = "php/gitphp.git";
$git_projects['PHP']['MDB'] = "php/mdb.git";
$git_projects['Nuclear']['Fusion'] = "nuclear/fusion.git";
$git_projects['Websites']['lots'] = "websites/lots.git";
$git_projects['Websites']['bth'] = "websites/bth.git";
$git_projects['School']['CS135'] = "school/cs135.git";
$git_projects['School']['CS150'] = "school/cs150.git";
$git_projects['School']['CS151'] = "school/cs151.git";
$git_projects['School']['CS156'] = "school/cs156.git";
$git_projects['School']['CS160'] = "school/cs160.git";
$git_projects['School']['CS161'] = "school/cs161.git";
$git_projects['School']['CS169'] = "school/cs169.git";
$git_projects['School']['CS178'] = "school/cs178.git";
$git_projects['School']['CS180'] = "school/cs180.git";
$git_projects['School']['CS189'] = "school/cs189.git";
$git_projects['School']['CS183'] = "school/cs183.git";
$git_projects['School']['CS193'] = "school/cs193.git";
$git_projects['School']['CS195'] = "school/cs195.git";
$git_projects['School']['CS196'] = "school/cs196.git";

?>
