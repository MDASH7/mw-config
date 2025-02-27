<?php
/*
LocalSettings.php for Miraheze.
Authors of initial version: Southparkfan, John Lewis, Orain contributors
*/

# Load PrivateSettings (e.g. wgDBpassword)
require_once( "/srv/mediawiki/config/PrivateSettings.php" );

# Load global skins and extensions
require_once( "/srv/mediawiki/config/GlobalSkins.php" );
require_once( "/srv/mediawiki/config/GlobalExtensions.php" );

# Don't allow web access.
if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not an entry point.' );
}

$wmgUploadHostname = "static.miraheze.org";

# Initialize $wgConf
$wgConf = new SiteConfiguration;
$wgConf->suffixes = array( 'wiki' );
$wgLocalVirtualHosts = array( '81.4.125.112' );

$wmgHostname = isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : 'undefined';

// Namespaces (please count upwards from 1600 to avoid any conflicts!)
define( 'NS_TECH', 1600 );
define( 'NS_TECH_TALK', 1601 );
define( 'NS_HL2RP', 1602 );
define( 'NS_HL2RP_TALK', 1603 );
define( 'NS_ARP', 1604 );
define( 'NS_ARP_TALK', 1605 );
define( 'NS_EVENT', 1606 );
define( 'NS_EVENT_TALK', 1607 );
define( 'NS_CLAN', 1608 );
define( 'NS_CLAN_TALK', 1609 );
define( 'NS_POE', 1610 );
define( 'NS_POE_TALK', 1611 );
define( 'NS_LEAGUE', 1612 );
define( 'NS_LEAGUE_TALK', 1613 );
define( 'NS_SMITE', 1614 );
define( 'NS_SMITE_TALK', 1615 );
define( 'NS_SERVER', 1616 );
define( 'NS_SERVER_TALK', 1617);
define( 'NS_COMIC', 1618 );
define( 'NS_COMIC_TALK', 1619 );
define( 'NS_TROPEWORKSHOP', 1620 );
define( 'NS_TROPEWORKSHOP_TALK', 1621 );
define( 'NS_HOENN', 1622 );
define( 'NS_HOENN_TALK', 1623 );
define( 'NS_OFFICIAL', 1624 );
define( 'NS_OFFICIAL_TALK', 1625 );
define( 'NS_PORTAL', 1626 );
define( 'NS_PORTAL_TALK', 1627 );
define( 'NS_CALL_OF_DUTY', 1628 );
define( 'NS_CALL_OF_DUTY_TALK', 1629 );
define( 'NS_REVIEWS', 1630 );
define( 'NS_REVIEWS_TALK', 1631 );
define( 'NS_TEST', 1632);
define( 'NS_TEST_TALK', 1633);
define( 'NS_MINECRAFT', 1636 );
define( 'NS_MINECRAFT_TALK', 1637 );
define( 'NS_SUPER_MARIO_LAND_2', 1638 );
define( 'NS_SUPER_MARIO_LAND_2_TALK', 1639 );
define( 'NS_SUPER_MARIO_WORLD_2', 1640 );
define( 'NS_SUPER_MARIO_WORLD_2_TALK', 1641 );
define( 'NS_SUPER_MARIO_BROS', 1642 );
define( 'NS_SUPER_MARIO_BROS_TALK', 1643 );
define( 'NS_SUPER_MARIO_ADVANCE', 1644 );
define( 'NS_SUPER_MARIO_ADVANCE_TALK', 1645 );
define( 'NS_SUPER_MARIO_ADVANCE_2', 1646 );
define( 'NS_SUPER_MARIO_ADVANCE_2_TALK', 1647 );
define( 'NS_SUPER_MARIO_ADVANCE_3', 1648 );
define( 'NS_SUPER_MARIO_ADVANCE_3_TALK', 1649 );
define( 'NS_SUPER_MARIO_ADVANCE_4', 1650 );
define( 'NS_SUPER_MARIO_ADVANCE_4_TALK', 1651 );
define( 'NS_THE_LEGEND_OF_ZELDA', 1652 );
define( 'NS_THE_LEGEND_OF_ZELDA_TALK', 1653 );
define( 'NS_LCS', 1654 );
define( 'NS_LCS_TALK', 1655 );
define( 'NS_MEDI', 1656 );
define( 'NS_MEDI_TALK', 1657 );
define( 'NS_LIBRARY', 1658);
define( 'NS_LIBRARY_TALK', 1659);
define( 'NS_TEACHING', 1660);
define( 'NS_TEACHING_TALK', 1661);
define( 'NS_BLANK', 1662);
define( 'NS_BLANK_TALK', 1663);
define( 'NS_RESEARCH', 1664);
define( 'NS_RESEARCH_TALK', 1665);
define( 'NS_ADMIN', 1666);
define( 'NS_ADMIN_TALK', 1667);
define( 'NS_WORKSHOP', 1668);
define( 'NS_WORKSHOP_TALK', 1669);
define( 'NS_SELP', 1670);
define( 'NS_SELP_TALK', 1671);
define( 'NS_STUDY_NOTE', 1672);
define( 'NS_STUDY_NOTE_TALK', 1673);
define( 'NS_EXPLANATION', 1674);
define( 'NS_EXPLANATION_TALK', 1675);
define( 'NS_KOREAN_STUDY_NOTE', 1676);
define( 'NS_KOREAN_STUDY_NOTE_TALK', 1677);
define( 'NS_GLOSSARY', 1678);
define( 'NS_GLOSSARY_TALK', 1679);
define( 'NS_SPRITES', 1680);
define( 'NS_SPRITES_TALK', 1681);
define( 'NS_GALLERY', 1682);
define( 'NS_GALLERY_TALK', 1683);
define( 'NS_HALAMAN', 1684);
define( 'NS_HALAMAN_TALK', 1685);
define( 'NS_DICT', 1686);
define( 'NS_DICT_TALK', 1687);
define( 'NS_FEATURED', 1688);
define( 'NS_FEATURED_TALK', 1689);
define( 'NS_ARTIKEL', 1690);
define( 'NS_ARTIKEL_TALK', 1691);
define( 'NS_VIDEO', 1692);
define( 'NS_VIDEO_TALK', 1693);

// Refer to NS_MODULE before importing Scribunto (tmewiki)
define( 'WMG_NS_MODULE', 828 );
define( 'WMG_NS_MODULE_TALK', 829 );

$wgConf->settings = array(
	// AbuseFilter
	'wgAbuseFilterCentralDB' => array(
		'default' => 'metawiki',
	),
	'wgAbuseFilterIsCentral' => array(
		'default' => false,
		'metawiki' => true,
	),

	// Anti-spam
	'wgAccountCreationThrottle' => array(
		'default' => 5,
	),
	'wgAutoConfirmAge' => array(
		'default' => 345600, // 4 days * 24 hours * 60 minutes * 60 seconds
		'developmentwiki' => 259200, // 3 days * 24 hours * 60 minutes * 60 seconds
	),
	'wgAutoConfirmCount' => array(
		'default' => 10,
	),
	
	// BetaFeatures
	'wgMediaViewerIsInBeta' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'inazumaelevenwiki' => true,
		'justinbieberwiki' => true,
		'thehushhushsagawiki' => true,
		'youtubewiki' => true,
	),
	'wgPopupsBetaFeature' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'inazumaelevenwiki' => true,
		'justinbieberwiki' => true,
		'thehushhushsagawiki' => true,
		'youtubewiki' => true,
	),

	// Block
	'wgBlockAllowsUTEdit' => array(
		'default' => true,
	),

	// Cache
	'wgCacheDirectory' => array(
		'default' => '/srv/mediawiki/w/cache',
	),
	'wgLocalisationCacheConf' => array(
		'default' => array(
			'class' => 'LocalisationCache',
			'store' => 'files',
			'storeDirectory' => "$IP/cache/l10n",
			'manualRecache' => true,
		),
	),
	// Do not enable this without Southparkfan's
	// permission, as it could let Redis crash.
	'wgPreprocessorCacheThreshold' => array(
		'default' => false,
	),
	'wgResourceLoaderMaxage' => array(
		'default' => array(
			'versioned' => array(
				'server' => 12 * 60 * 60, // 12 hours
				'client' => 1 * 24 * 60 * 60, // 1 day
			),
			'unversioned' => array(
				'server' => 5 * 60, // 5 minutes
				'client' => 30 * 60, // 30 minutes
			),
		),
	),

	// Captcha
	'wgCaptchaClass' => array(
		'default' => 'ReCaptchaNoCaptcha',
	),
	'wgReCaptchaSendRemoteIP' => array(
		'default' => false,
	),

	// CentralAuth
	'wgCentralAuthAutoCreateWikis' => array(
		'default' => array( 'loginwiki', 'metawiki' ),
	),
	'wgCentralAuthAutoNew' => array(
		'default' => true,
	),
	'wgCentralAuthAutoLoginWikis' => array(
		'default' => array(
			'allthetropes.org' => 'allthetropeswiki',
			'alwiki.net' => 'alwikiwiki',
			'antiguabarbudacalypso.com' => 'antiguabarbudacalypsowiki',
			'aman.info.tm' => 'amaninfowiki',
			'applewiki.tk' => 'applewikiwiki',
			'boulderwiki.org' => 'boulderwikiwiki',
			'carving.wiki' => 'carvingwiki',
			'wiki.drones4nature.info' => 'drones4allwiki', 
			'espiral.org' => 'espiralwiki',
			'evelopedia.tk' => 'evelopediawiki',
			'fibromyalgia-engineer.com' => 'fibromyalgiaengineerwiki',
			'haxion.space' => 'haxionspacewiki',
			'ircwiki.cf' => 'ircwiki',
			'meta.trek.tk' => 'metatrekwiki',
			'oneagencydunedin.wiki' => 'oneagencydunedinwiki',
			'www.openonderwijs.org' => 'openonderwijswiki',
			'oyeavdelingen.org' => 'oyeavdelingenwiki',
			'permanentfuturelab.wiki' => 'permanentfuturelabwiki',
			'private.revi.wiki' => 'reviwiki',
			'publictestwiki.com' => 'testwiki',
			'sandbox.wisdomwiki.org' => 'wisdomsandboxwiki',
			'spiral.wiki' => 'spiralwiki',
			'takethatwiki.com' => 'takethatwikiwiki',
			'thelonsdalebattalion.co.uk' => 'thelonsdalebattalionwiki',
			'thinkingliquid.org' => 'thinkingliquidwiki',
			'universebuild.com' => 'universebuildwiki',
			'wiki.aenasan.com' => 'aenasanwiki',
			'wiki.dottorconte.eu' => 'dottorcontewiki',
			'wiki.dwplive.com' => 'dwplivewiki',
			'wiki.forfunssake.co.uk' => 'forfunssakewiki',
			'wiki.garyjohnsonmeetups.com' => 'garyjohnsonmeetupswiki',
			'wiki.grottocenter.org' => 'grottocenterwiki',
			'wiki.kaisaga.com' => 'wikikaisagawiki',
			'wiki.labby.io' => 'labbywiki',
			'wiki.lbcomms.co.za' => 'nextlevelwikiwiki',
			'wiki.make717.org' => 'make717wiki',
			'wiki.meeusen.net' => 'meeusenwiki',
			'wiki.rpgbrigade.org' => 'rpgbrigadewiki',
			'wiki.valentinaproject.org' => 'valentinaprojectwiki',
			'wikiparkinson.org' => 'wikiparkinsonwiki',
			'wisdomwiki.org' => 'wisdomwikiwiki',
			'www.zenbuddhism.info' => 'zenbuddhismwiki',
		),
	),
	'wgCentralAuthAutoMigrate' => array(
		'default' => true,
	),
	'wgCentralAuthCookies' => array(
		'default' => true,
	),
	'wgCentralAuthCookieDomain' => array(
		'default' => '.miraheze.org',
	),
	'wgCentralAuthCreateOnView' => array(
		'default' => true,
	),
	'wgCentralAuthDatabase' => array(
		'default' => 'centralauth',
	),
	'wgCentralAuthEnableGlobalRenameRequest' => array(
		'default' => false,
		'metawiki' => true,
	),
	'wgCentralAuthLoginWiki' => array(
		'default' => 'loginwiki',
	),
	'wgCentralAuthSilentLogin' => array(
		'default' => true,
	),

	// Comments extension
	'wgCommentsDefaultAvatar' => array(
	    'default' => '/w/extensions/SocialProfile/avatars/default_ml.gif',
	),

	// CreateWiki
	'wmgCreateWikiSQLfiles' => array(
		'default' => array(
			"$IP/maintenance/tables.sql",
			"$IP/extensions/AbuseFilter/abusefilter.tables.sql",
			"$IP/extensions/AJAXPoll/patches/create-table--ajaxpoll_info.sql",
			"$IP/extensions/AJAXPoll/patches/create-table--ajaxpoll_vote.sql",
			"$IP/extensions/AntiSpoof/sql/patch-antispoof.mysql.sql",
			"$IP/extensions/ArticleFeedbackv5/sql/ArticleFeedbackv5.sql",
			"$IP/extensions/ArticleRatings/ratings.sql",
			"$IP/extensions/BetaFeatures/sql/create_counts.sql",
			"$IP/extensions/CheckUser/cu_log.sql",
			"$IP/extensions/CheckUser/cu_changes.sql",
			"$IP/extensions/Comments/sql/comments.sql",
			"$IP/extensions/Echo/echo.sql",
			"$IP/extensions/EducationProgram/sql/EducationProgram.sql",
			"$IP/extensions/FlaggedRevs/backend/schema/mysql/FlaggedRevs.sql",
			"$IP/extensions/Flow/flow.sql",
			"$IP/extensions/GlobalBlocking/localdb_patches/setup-global_block_whitelist.sql",
			"$IP/extensions/Math/db/math.mysql.sql",
			"$IP/extensions/Math/db/mathlatexml.mysql.sql",
			"$IP/extensions/Math/db/mathoid.mysql.sql",
			"$IP/extensions/MediaWikiChat/sql/chat.sql",
  			"$IP/extensions/MediaWikiChat/sql/chat_users.sql",
			"$IP/extensions/MsCalendar/MsCalendar.sql",
			"$IP/extensions/Newsletter/sql/nl_issues.sql",
			"$IP/extensions/Newsletter/sql/nl_newsletters.sql",
			"$IP/extensions/Newsletter/sql/nl_publishers.sql",
			"$IP/extensions/Newsletter/sql/nl_subscriptions.sql",
			"$IP/extensions/OAuth/backend/schema/mysql/OAuth.sql",
			"$IP/extensions/PageTriage/sql/PageTriageTags.sql",
			"$IP/extensions/PageTriage/sql/PageTriagePageTags.sql",
			"$IP/extensions/PageTriage/sql/PageTriagePage.sql",
			"$IP/extensions/PageTriage/sql/PageTriageLog.sql",
			"$IP/extensions/Poll/archives/Poll-install-manual.sql",
			"$IP/extensions/SocialProfile/UserProfile/user_profile.sql",
			"$IP/extensions/SocialProfile/UserSystemMessages/user_system_messages.sql",
			"$IP/extensions/SocialProfile/UserStats/user_points_monthly.sql",
			"$IP/extensions/SocialProfile/UserStats/user_points_archive.sql",
			"$IP/extensions/SocialProfile/UserStats/user_points_weekly.sql",
			"$IP/extensions/SocialProfile/UserStats/user_stats.sql",
			"$IP/extensions/SocialProfile/SystemGifts/systemgifts.sql",
			"$IP/extensions/SocialProfile/UserRelationship/user_relationship.sql",
			"$IP/extensions/SocialProfile/UserGifts/usergifts.sql",
			"$IP/extensions/SocialProfile/UserBoard/user_board.sql",
			"$IP/extensions/TimedMediaHandler/TimedMediaHandler.sql",
			"$IP/extensions/TitleKey/titlekey.sql",
			"$IP/extensions/Translate/sql/revtag.sql",
			"$IP/extensions/Translate/sql/translate_groupreviews.sql",
			"$IP/extensions/Translate/sql/translate_groupstats.sql",
			"$IP/extensions/Translate/sql/translate_messageindex.sql",
			"$IP/extensions/Translate/sql/translate_metadata.sql",
			"$IP/extensions/Translate/sql/translate_reviews.sql",
			"$IP/extensions/Translate/sql/translate_sections.sql",
			"$IP/extensions/Translate/sql/translate_stash.sql",
			"$IP/extensions/Translate/sql/translate_tm.sql",
			"$IP/extensions/VoteNY/vote.mysql",
			"$IP/extensions/Wikibase/repo/sql/Wikibase.sql",
			"$IP/extensions/Wikibase/repo/sql/changes.sql",
			"$IP/extensions/Wikibase/repo/sql/changes_dispatch.sql",
			"$IP/extensions/Wikibase/repo/sql/changes_subscription.sql",
			"$IP/extensions/Wikibase/repo/sql/wb_property_info.sql",
			"$IP/extensions/WikiForum/sql/wikiforum.sql",
			"$IP/extensions/WikiLove/patches/WikiLoveLog.sql",
			"$IP/extensions/UrlShortener/schemas/urlshortcodes.sql"
		),
	),
	// Cookies extension settings
	'wgCookieWarningMoreUrl' => array(
		'default' => false,
		'thelonsdalebattalionwiki' => 'https://thelonsdalebattalion.co.uk/wiki/The_Lonsdale_Battalion:Cookies'
	),
	// Database
	'wgCompressRevisions' => array(
		'default' => false,
		'allthetropeswiki' => true,
	),
	'wgDBtype' => array(
		'default' => 'mysql',
	),
	'wgDBserver' => array(
		'default' => '81.4.125.112',
	),
	'wgDBuser' => array(
		'default' => 'mediawiki',
	),
	'wgDBadminuser' => array(
		'default' => 'wikiadmin',
	),
	'wgReadOnly' => array(
		'default' => false, // 'Miraheze is performing its final database server migration. It will take approximately 2 to 3 hours, so we expect to finish it between 19:45 and 20:45 UTC.',
	),
	'wgSharedDB' => array(
		'default' => 'metawiki',
	),
	'wgSharedTables' => array(
		'default' => array(),
	),

	// Delete
	'wgDeleteRevisionsLimit' => array(
		'default' => '250', // databases don't have much memory - let's not overload them in future
	),

	// Editing Matrix
	'wmgEditingMatrix' => array(
		'default' => array(
			'anon' => false, // disable anonymous editing
			'user' => false, // disable user editing
			'editor' => false, // add an editor group for editing + sysop assign
			'sysop' => false, // allow sysop' to edit (not needed)
		),
		'+8stationwiki' => array(
			'anon' => true,
		),
		'+adnovumwiki' => array(
			'anon' => true,
		),
		'+aleenghawiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+allbanks2wiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+antiguabarbudacalypsowiki' => array(
			'anon' => true,
		),
		'+carvingwiki' => array(
			'anon' => true,
		),
		'+christipediawiki' => array(
			'anon' => true,
			'user' => true,
			'editor' => true,
		),
		'+clementsworldbuildingwiki' => array(
			'anon' => true,
		),
		'+compilerdevwiki' => array(
			'anon' => true,
		),
		'+cpiwiki' => array(
			'anon' => true,
		),
		'+dditecwiki' => array(
			'anon' => true,
			'user' => true,
			'editor' => true,
		),
		'+dottorcontewiki' => array(
			'anon' => true,
		),
		'+evelopediawiki' => array(
			'anon' => true,
		),
		'+forexwiki' => array(
			'anon' => true,
			'user' => true,
			'editor' => true,
		),
		'+fieldresearchwiki' => array(
			'anon' => true,
		),
		'+freecollegeprojectwiki' => array(
			'anon' => true,
		),
		'+frontdeskswiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+geodatawiki' => array(
			'anon' => true,
		),
		'+godaigowiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+izanagiwiki' => array(
			'anon' => true,
		),
		'+justwikiwiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+jokowiki' => array(
			'anon' => true,
		),
		'+karniarutheniawiki' => array(
			'anon' => true,
		),
		'+kl6fwiki' => array(
			'anon' => true,
		),
		'+metatrekwiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+ircwiki' => array(
			'anon' => true,
		),
		'+micropediawiki' => array(
			'anon' => true,
		),
		'+miraiwiki' => array(
			'anon' => true,
		),
		'+noalatalawiki' => array(
			'anon' => true,
		),
		'+ntlawwiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+ofthevampirewiki' => array(
			'anon' => true,
		),
		'+oncprojectwiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+philmont126wiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+poserdazfreebieswiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+plazmaburstwiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
			'editor' => true,
		),
		'+priyowiki' => array(
			'anon' => true,
		),
		'+ricwiki' => array(
			'anon' => true,
		),
		'+rpgbrigadewiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+saliorpediawiki' => array(
			'anon' => true,
			'user' => true,
			'editor' => true,
		),
		'+safiriawiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+seldirwiki' => array(
			'anon' => true,
			'user' => true,
			'editor' => true,
		),
		'+softwarecrisiswiki' => array(
			'anon' => true,
		),
		'+snowthegamewiki' => array(
			'anon' => true,
			'sysop' => true,
		),
		'+sthomaspriwiki' => array(
			'user' => true,
			'sysop' => true,
		),
		'+sylwiki' => array(
			'anon' => true,
			'user' => true,
			'editor' => true,
			'sysop' => true,
		),
		'+szkwiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+thelonsdalebattalionwiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+thoughtonomywikiwiki' => array(
			'anon' => true,
		),
		'+touhouenginewiki' => array(
			'anon' => true,
		),
		'+traunstoanerwiki' => array(
			'anon' => true,
		),
		'+turkcesozlukwiki' => array(
			'anon' => true,
		),
		'+vrgowiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+welcomewiki' => array(
			'anon' => true,
		),
		'+walthamstowlabourwiki' => array(
			'anon' => true,
			'user' => true,
			'sysop' => true,
		),
		'+wisdomwikiwiki' => array(
			'anon' => true,
			'user' => true,
			'editor' => true,
			'sysop' => true,
		),
		'+wisdomsandboxwiki' => array(
			'anon' => true,
		),
	),

	'wgPFEnableStringFunctions' => array(
		'default' => false,
		'marcoschriekwiki' => true,
	),

	'wgAllowSlowParserFunctions' => array(
		'default' => false,
		'trexwiki' => true,
	),
	// Dormancy policy && RC stuff
	'wgRCMaxAge' => array(
		'default' => 180 * 24 * 3600,
		'allthetropeswiki' => 90 * 24 * 3600,
		'extloadwiki' => 90 * 24 * 3600,
		'loginwiki' => 90 * 24 * 3600,
		'metawiki' => 90 * 24 * 3600,
		'testwiki' => 90 * 24 * 3600,
	),

	// Extensions and Skins
	// AccessControl: due to security risks, use of this extension is at a wikis' calculated risk.
	// Prior to enabling the extension a bureaucrat should agree (on their own wiki)
	// that Miraheze is NOT responsible for any data leaks caused by this extension,
	// and that the wiki and elevated users are fully responsible for the usage of AccessControl.
	'wmgUseAccessControl' => array(
		'default' => false,
		'bmedwiki' => true,
		'extloadwiki' => true,
		'mindgearwiki' => true,
		'ndnwiki' => true,
		'wimawiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
	),
	'wmgUseAddHTMLMetaAndTitle' => array(
		'default' => false,
		'extloadwiki' => true,
		'partupwiki' => true,
		'wisdomwikiwiki' => true,
	),
	'wmgUseAdminLinks' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'christipediawiki' => true,
		'cssandjsschoolboardwiki' => true,
		'developmentwiki' => true,
		'extloadwiki' => true,
		'ezdmfwiki' => true,
		'heistwiki' => true,
		'ndnwiki' => true,
		'perpuswiki' => true,
		'poserdazfreebieswiki' => true,
		'priyowiki' => true,
		'secondcirclewiki' => true,
		'starsetonlinewiki' => true,
		'szkwiki' => true,
		'takethatwikiwiki' => true,
		'testwiki' => true,
		'tochkiwiki' => true,
		'touhouenginewiki' => true,
		'walthamstowlabourwiki' => true,
		'worldbattlewiki' => true,
		'yugiohwiki' => true,
		'wikicanadawiki' => true,
	),
	'wmgUseAJAXPoll' => array(
		'default' => false,
		'extloadwiki' => true,
		'openconstitutionwiki' => true,
		'wikipucwiki' => true,
	),
	'wmgUseApex' => array(
		'default' => false,
		'dtswiki' => true,
		'extloadwiki' => true,
		'inazumaelevenwiki' => true,
		'thelonsdalebattalionwiki' => true,
	),
	'wmgUseArticleFeedbackv5' => array(
		'default' => false,
		'applewikiwiki' => true,
		'applebranchwiki' => true,
		'fablabesdswiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseArticleRatings' => array(
		'default' => false,
		'applewikiwiki' => true,
		'applebranchwiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseAuthorProtect' => array(
		'default' => false,
		'ayrshirewiki' => true,
		'extloadwiki' => true,
		'grandtheftwikiwiki' => true,
		'jakeperswiki' => true,
		'sthomaspriwiki' => true,
		'testauthorprotectwiki' => true,
		'trexwiki' => true,
	),
	'wmgUseAutomaticBoardWelcome' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseBetaFeatures' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'dtswiki' => true,
		'extloadwiki' => true,
		'inazumaelevenwiki' => true,
		'justinbieberwiki' => true,
		'robloxscripterswiki' => true,
		'takethatwikiwiki' => true,
		'thefosterswiki' => true,
		'thehushhushsagawiki' => true,
		'youtubewiki' => true,
	),
	'wmgUseBlogPage' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
		'ircwiki' => true,
		'robloxscripterswiki' => true,
		'wikidolphinhansenwiki' => true,
	),
	'wmgUseMSCalendar' => array(
		'default' => false,
		'5awiki' => true,
		'aucelewiki' => true,
		'barbarasherwikiwiki' => true,
		'dtswiki' => true,
		'extloadwiki' => true,
		'financialfindswiki' => true,
		'hontsukuruwiki' => true,
		'philmont126wiki' => true,
		'robertsnoteswiki' => true,
		'sterbalfamilyrecipeswiki' => true,
		'sterbalssundrystudieswiki' => true,
		'umodwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
		'wikicanadawiki' => true,
	),
	'wmgUseCategoryTree' => array(
		'default' => true,
		'whentheycrywiki' => false,
	),
	'wmgUseCharInsert' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'anothertimeline2120wiki' => true,
		'cssandjsschoolboardwiki' => true,
		'doinwiki' => true,
		'dtswiki' => true,
		'extloadwiki' => true,
		'jayuwikiwiki' => true,
		'studynotekrwiki' => true,
		'walthamstowlabourwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
	),
	'wmgUseCollapsibleVector' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'anuwiki' => true,
		'extloadwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
	),
	'wmgUseComments' => array(
		'default' => false, // Remember to assign 'commentadmin' rights!
		'allthetropeswiki' => true,
		'applebranchwiki' => true,
		'applewikiwiki' => true,
		'extloadwiki' => true,
		'ezdmfwiki' => true,
		'foodsharinghamburgwiki' => true,
		'jayuwikiwiki' => true,
		'muckhackwiki' => true,
		'openconstitutionwiki' => true,
		'plazmaburstwiki' => true,
		'porpwiki' => true,
		'priyowiki' => true,
		'robloxscripterswiki' => true,
		'stellachronicawiki' => true,
		'studynotekrwiki' => true,
		'takethatwikiwiki' => true,
		'wikidolphinhansenwiki' => true,
		'wikipucwiki' => true,
	),
	'wmgUseContactPage' => array(
		'default' => false, // Add wiki config to ContactPage.php
		'ayrshirewiki' => true,
		'christipediawiki' => true,
		'fablabesdswiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseCookieWarning' => array(
		'default' => false,
		'extloadwiki' => true,
		'thelonsdalebattalionwiki' => true,
	),
	'wmgUseCreatePage' => array(
		'default' => false,
		'evelopediawiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseCreateWiki' => array(
		'default' => false,
		'metawiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseCSS' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'applebranchwiki' => true,
		'applewikiwiki' => true,
		'dtswiki' => true,
		'extloadwiki' => true,
		'takethatwikiwiki' => true,
		'webflowwiki' => true,
	),
	'wmgUseCustomNavBlocks' => array(
		'default' => false,
		'extloadwiki' => true,
	),
	'wmgUseDuskToDawn' => array(
		'default' => false,
		'extloadwiki' => true,
		'ofthevampirewiki' => true,
	),
	'wmgUseDPLForum' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
		'rpgbrigadewiki' => true,
	),
	'wmgUseDynamicPageList' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'augustinianumwiki' => true,
		'camerainfowiki' => true,
		'extloadwiki' => true,
		'heistwiki' => true,
		'hydrawikiwiki' => true,
		'noalatalawiki' => true,
		'rpgbrigadewiki' => true,
		'walthamstowlabourwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
	),
	'wmgUseDynamicPageList3' => array(
		'default' => false,
		'ayrshirewiki' => true,
		'extloadwiki' => true,
		'sthomaspriwiki' => true,
	),
	'wmgUseEditcount' => array(
		'default' => false,
		'aktposwiki' => true,
		'allthetropeswiki' => true,
		'dtswiki' => true,
		'extloadwiki' => true,
		'muckhackwiki' => true,
		'perpuswiki' => true,
		'sthomaspriwiki' => true,
		'trexwiki' => true,

	),
	'wmgUseEducationProgram' => array(
		'default' => false,
		'extloadwiki' => true,
		'lezar224wiki' => true,
	),
	'wmgUseErudite' => array(
		'default' => false,
		'bdorpwiki' => true,
		'datachronwiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseFancyBoxThumbs' => array(
		'default' => false,
		'ayrshirewiki' => true,
		'extloadwiki' => true,
		'lgproduktsupportwiki' => true,
	),
	'wmgUseFeaturedFeeds' => array(
		'default' => false,
	),
	'wmgUseFlaggedRevs' => array(
		'default' => false,
		'extloadwiki' => true,
		'pso2wiki' => true,
		'trexwiki' => true,
	),
	'wmgUseFlow' => array(
		'default' => false, // Please make sure parsoid is enabled on modules/parsoid/manifests/init.pp or modules/parsoid/templates/settings.js (custom domains only)		
		'8stationwiki' => true,
		'adnovumwiki' => true,
		'ageofimperialistswiki' => true,
		'allthetropeswiki' => true,
		'alwikiwiki' => true,
		'bgowiki' => true,
		'cecwiki' => true,
		'christipediawiki' => true,
		'detlefswiki' => true,
		'developmentwiki' => true,
		'dicficwiki' => true,
		'drones4allwiki' => true,
		'dtswiki' => true,
		'ernaehrungsrathhwiki' => true,
		'espiralwiki' => true,
		'evelopediawiki' => true,
		'extloadwiki' => true,
		'ezdmfwiki' => true,
	        'fbwikiwiki' => true,
		'grandtheftwikiwiki' => true,
		'ircwiki' => true,
		'korachwiki' => true,
		'kwikiwiki' => true,
		'lezar224wiki' => true,
		'marcoschriekwiki' => true,
		'moziwiki' => true,
		'muckhackwiki' => true,
		'nextlevelwikiwiki' => true,
		'oyeavdelingenwiki' => true,
		'permanentfuturelabwiki' => true,
		'priyowiki' => true,
		'ricwiki' => true,
		'soshomophobiewiki' => true,
		'spiralwiki' => true,
		'sthomaspriwiki' => true,
		'takethatwikiwiki' => true,
		'touhouenginewiki' => true,
		'universebuildwiki' => true,
		'walthamstowlabourwiki' => true,
		'wisdomsandboxwiki' => true,
		'wisdomwikiwiki' => true,
		'yacresourceswiki' => true,
	),
	'wmgUseForeground' => array(
		'default' => false,
		'3dicwiki' => true,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
		'inazumaelevenwiki' => true,
		'jayuwikiwiki' => true,
		'permanentfuturelabwiki' => true,
		'starsetonlinewiki' => true,
	),
	// Be aware of https://www.mediawiki.org/wiki/Extension:Header_Tabs#Incompatible_extensions
	'wmgUseHeaderTabs' => array(
		'default' => false,
		'bdorpwiki' => true,
		'datachronwiki' => true,
		'dtswiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseHideSection' => array(
		'default' => false,
		'aktposwiki' => true,
		'allthetropeswiki' => true,
		'developmentwiki' => true,
		'extloadwiki' => true,
		'hendrickswiki' => true,
	),
	'wmgUseHighlightLinksInCategory' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseImageMap' => array(
		'default' => false,
		'adnovumwiki' => true,
		'allthetropeswiki' => true,
		'creersonarbrewiki' => true,
		'doinwiki' => true,
		'dtswiki' => true,
		'extloadwiki' => true,
		'hendrickswiki' => true,
		'jayuwikiwiki' => true,
		'lclwikiwiki' => true,
		'shoppingwiki' => true,
		'sthomaspriwiki' => true,
		'studynotekrwiki' => true,
		'takethatwikiwiki' => true,
		'universebuildwiki' => true,
		'whentheycrywiki' => true,
		'wisdomwikiwiki' => true,
	),
	'wmgUseJavascriptSlideshow' => array(
		'default' => false,
		'extloadwiki' => true,
		'plazmaburstwiki' => true,
		'takethatwikiwiki' => true,
	),
	'wmgUseJosa' => array(
		'default' => false,
		'extloadwiki' => true,
		'reviwiki' => true,
	),
	'wmgUseLabeledSectionTransclusion' => array(
		'default' => false,
		'bmedwiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseLinkSuggest' => array(
		'default' => false,
		'extloadwiki' => true,
	),
	'wmgUseLoopsCombo' => array(
		'default' => false,
		'bgowiki' => true,
		'eotewiki' => true,
		'extloadwiki' => true,
		'marcoschriekwiki' => true,
		'ndnwiki' => true,
		'rpgbrigadewiki' => true,
		'secondcirclewiki' => true,
	),
	'wmgUseMaps' => array(
		'default' => false,
		'ayrshirewiki' => true,
		'extloadwiki' => true,
		'jayuwikiwiki' => true,
		'noalatalawiki' => true,
		'takethatwikiwiki' => true,
		'wikidmatlandwiki' => true,
	),
	'wmgUseMassEditRegex' => array(
		'default' => false, // sysop is given permission 'masseditregex' by default
		'allthetropeswiki' => true,
		'cpiwiki' => true,
		'extloadwiki' => true,
		'takethatwikiwiki' => true,
	),
	'wmgUseMediaWikiChat' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'applebranchwiki' => true,
		'applewikiwiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseMetrolook' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'ayrshirewiki' => true,
		'dtswiki'=> true,
		'extloadwiki' => true,
		'inazumaelevenwiki' => true,
		'thelonsdalebattalionwiki' => true,
	),
	'wmgUseMobileFrontend' => array(
		'default' => true,
		'applebranchwiki' => false,
		'applewikiwiki'=> false,
		'izanagiwiki' => false,
		'ndnwiki' => false,
		'permanentfuturelabwiki' => false,
	),
	'wmgUseMonaco' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseMsPackage' => array(
		'default' => false,
		'catboxwiki' => true,
		'extloadwiki' => true, // do not set this to false without disabling MsUpload on all wikis below
		'urho3dwiki' => true,
	),
	// MsUpload is enabled on extloadwiki via MsPackage
	'wmgUseMsUpload' => array(
		'default' => false,
		'8stationwiki' => true,
		'adnovumwiki' => true,
		'aktposwiki' => true,
		'allthetropeswiki' => true,
		'amaninfowiki' => true,
		'ayrshirewiki' => true,
		'bgowiki' => true,
		'chandruswethswiki' => true,
		'christipediawiki' => true,
		'doinwiki' => true,
		'elainarmuawiki' => true,
		'emulationwiki' => true,
		'evawiki' => true,
		'exitsincwiki' => true,
		'hendrickswiki' => true,
		'izanagiwiki' => true,
		'luckandlogicwiki' => true,
		'oyeavdelingenwiki' => true,
		'poserdazfreebieswiki' => true,
		'priyowiki' => true,
		'snowthegamewiki' => true,
		'universebuildwiki' => true,
		'webflowwiki' => true,
		'whentheycrywiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
		'wikicanadawiki' => true,
	),
	'wmgUseMultimediaViewer' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'bttestwiki' => true,
		'extloadwiki' => true,
		'inazumaelevenwiki' => true,
		'justinbieberwiki' => true,
		'ndnwiki' => true,
		'robloxscripterswiki' => true,
		'rpgbrigadewiki' => true,
		'sthomaspriwiki' => true,
		'takethatwikiwiki' => true,
		'thefosterswiki' => true,
		'thehushhushsagawiki' => true,
		'thelonsdalebattalionwiki' => true,
		'youtubewiki' => true,
	),
	'wmgUseMultiBoilerplate' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
		'muckhackwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
	),
	'wmgUseNewestPages' => array(
	    'default' => false,
	    'christipediawiki' => true,
	    'extloadwiki' => true,
	    'muckhackwiki' => true,
	),
	'wmgUseNewsletter' => array(
		'default' => false,
		'espiralwiki' => true,
		'extloadwiki' => true
	),
	'wmgUseNewUserMessage' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'developmentwiki' => true,
		'extloadwiki' => true,
		'muckhackwiki' => true,
		'perpuswiki' => true,
		'takethatwikiwiki' => true,
		'trexwiki' => true,
		'universebuildwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
	),
	'wmgUseNewUsersList' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseNostalgia' => array(
		'default' => false,
		'extloadwiki' => true,
	),
	'wmgUseNoTitle' => array(
		'default' => false,
		'imperiuswiki' => true,
		'aktposwiki' => true,
		'alwikiwiki' => true,
		'carvingwiki' => true,
		'developmentwiki' => true,
		'dtswiki' => true,
		'extloadwiki' => true,
		'hendrickswiki' => true,
		'idleomenswiki' => true,
		'lbsgeswiki' => true,
		'luckandlogicwiki' => true,
		'openconstitutionwiki' => true,
		'rpgbrigadewiki' => true,
		'universebuildwiki' => true,
		'urho3dwiki' => true,
		'wikipucwiki' => true,
	),
	'wmgUseOATHAuth' => array(
		'default' => false,
		'extloadwiki' => true,
		'metawiki' => true,
	),
	'wmgUsePageNotice' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
		'ndnwiki' => true,
		'secondcirclewiki' => true,
		'sthomaspriwiki' => true,
		'wisdomwikiwiki' => true,
	),
	'wmgUsePageTriage' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'bgowiki' => true,
		'cssandjsschoolboardwiki' => true,
		'extloadwiki' => true,
		'jackperswiki' => true,
		'ndnwiki' => true,
		'poserdazfreebieswiki' => true,
		'priyowiki' => true,
		'sthomaspriwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
	),
	'wmgUsePDFEmbed' => array(
		'default' => false,
		'applebranchwiki' => true,
		'applewikiwiki' => true,
		'constwiki' => true,
		'extloadwiki' => true,
		'frontdeskswiki' => true,
		'ggdrwiki' => true,
		'lgproduktsupportwiki' => true,
		'ndnwiki' => true,
		'nextlevelwikiwiki' => true,
		'noalatalawiki' => true,
		'savagewikiwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
		'virpatel524wiki' => true,
	),
	'wmgUsePdfHandler' => array(
		'default' => false,
		'apneuverenigingwiki' => true,
		'constwiki' => true,
		'extloadwiki' => true,
		'noalatalawiki' => true,
	),
	'wmgUsePopups' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'christipediawiki' => true,
		'extloadwiki' => true,
		'inazumaelevenwiki' => true,
		'justinbieberwiki' => true,
		'marcoschriekwiki' => true,
		'takethatwikiwiki' => true,
		'thefosterswiki' => true,
		'thehushhushsagawiki' => true,
		'walthamstowlabourwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
		'youtubewiki' => true,
	),
	'wmgUsePoll' => array(
		'default' => false,
		'extloadwiki' => true,
		'jayuwikiwiki' => true,
		'nidda23wiki' => true,
		'takethatwikiwiki' => true,
		'universebuildwiki' => true,
		'wikipucwiki' => true,
	),
	'wmgUseProtectSite' => array(
		'default' => false,
		'extloadwiki' => true,
		'sthomaspriwiki' => true,
		'wikicanadawiki' => true,
	),
	'wmgUseQuiz' => array(
		'default' => false,
		'extloadwiki' => true,
		'jayuwikiwiki' => true,
	),
	'wmgUseRandomSelection' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
		'humorpediawiki' => true,
		'rpgbrigadewiki' => true,
		'takethatwikiwiki' => true,
		'tmewiki' => true,
		'russiawatchwiki' => true,
	),
	'wmgUseRefreshed' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'applebranchwiki' => true,
		'applewikiwiki' => true,
		'extloadwiki' => true,
		'inazumaelevenwiki' => true,
	),
	'wmgUseRelatedArticles' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
		'justinbieberwiki' => true,
		'thehushhushsagawiki' => true,
		'youtubewiki' => true,
	),
	'wmgUseReplaceText' => array(
		'default' => false,
		'evawiki' => true,
		'extloadwiki' => true,
		'thelonsdalebattalionwiki' => true,
	),
	'wmgUseRSS' => array(
		'default' => false,
		'emulationwiki' => true,
		'extloadwiki' => true,
		'lgproduktsupportwiki' => true,
	),
	'wmgUseSandboxLink' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
		'idtestwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
	),
	'wmgUseScratchBlocks' => array(
		'default' => false,
		'extloadwiki' => true,
		'qwertywiki' => true,
	),
	'wmgUseShortURL' => array(
		'default' => true,
		'applewikiwiki' => false,
		'applebranchwiki' => false,
	),
	'wmgUseSimpleTooltip' => array(
		'default' => false,
		'8stationwiki' => true,
		'apolcourseswiki' => true,
		'cpiwiki' => true,
		'extloadwiki' => true,
		'jakeperswiki' => true,
		'perpuswiki' => true,
		'trexwiki' => true,
	),
	'wmgUseSiteScout' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
	),
	// Requires copying of two directories: https://www.mediawiki.org/wiki/Extension:SocialProfile#Directories
	'wmgUseSocialProfile' => array(
		'default' => false,
		'adnovumwiki' => true,
		'allthetropeswiki' => true,
		'applebranchwiki' => true,
		'applewikiwiki' => true,
		'datachronwiki' => true,
		'extloadwiki' => true,
		'ircwiki' => true,
		'lezar224wiki' => true,
		'micropediawiki' => true,
		'priyowiki' => true,
		'robloxscripterswiki' => true,
		'stellachronicawiki' => true,
		'stoutofreachwiki' => true,
		'takethatwikiwiki' => true,
	),
	'wmgUseSubpageFun' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseSubPageList3' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseSyntaxHighlight' => array(
		'default' => false,
		'alfrescowiki' => true,
		'allthetropeswiki' => true,
		'cssandjsschoolboardwiki' => true,
		'datasciencewiki' => true,
		'detlefswiki' => true,
		'doinwiki' => true,
		'dtswiki' => true,
		'extloadwiki' => true,
		'ezdmfwiki' => true,
		'hendrickswiki' => true,
		'jayuwikiwiki' => true,
		'ndnwiki' => true,
		'nextlevelwikiwiki' => true,
		'noalatalawiki' => true,
		'partupwiki' => true,
		'pascalscada' => true,
		'perpuswiki' => true,
		'priyowiki' => true,
		'programmingreferencewiki' => true,
		'robloxscripterswiki' => true,
		'sizzlecookiewiki' => true,
		'sourcewiki' => true,
		'spacegamewiki' => true,
		'stellachronicawiki' => true,
		'studynotekrwiki' => true,
		'tmewiki' => true,
		'trexwiki' => true,
		'touhouenginewiki' => true,
		'urho3dwiki' => true,
		'valentinaprojectwiki' => true,
		'wikicervanteswiki' => true,
		'xdjibiwiki' => true,
		'xofwiki' => true,
	),
	// Combo of Tabs + Tabber
	'wmgUseTabsCombination' => array(
		'default' => false,
		'8stationwiki' => true,
		'aktposwiki' => true,
		'allthetropeswiki' => true,
		'developmentwiki' => true,
		'eternalconficttwiki' => true,
		'extloadwiki' => true,
		'thelonsdalebattalionwiki' => true,
		'russiawatchwiki' => true,
		'stellachronicawiki' => true,
		'takethatwikiwiki' => true,
		'universebuildwiki' => true,
		'whentheycrywiki' => true,
	),
	'wmgUseTimedMediaHandler' => array(
		'default' => false,
		'extloadwiki' => true,
		'geirpediawiki' => true,
	),
	'wmgUseTitleKey' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
		'walthamstowlabourwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
	),
	'wmgUseTorBlock' => array(
		'default' => false,
		'extloadwiki' => true,
		'jayuwikiwiki' => true,
		'takethatwikiwiki' => true,
        ),
	'wmgUseTranslate' => array(
		'default' => false,
		'3dicwiki' => true,
		'cpiwiki' => true,
		'dishwiki' => true,
		'extloadwiki' => true,
		'inazumaelevenwiki' => true,
		'metawiki' => true,
		'nvcwiki' => true,
		'pathfinderwiki' => true,
		'robloxscripterswiki' => true,
		'rpgbrigadewiki' => true,
		'rtwiki' => true,
		'spiralwiki' => true,
		'stellachronicawiki' => true,
		'studynotekrwiki' => true,
		'testwiki' => true,
		'thehushhushsagawiki' => true,
		'trexwiki' => true,
		'urpswiki' => true,
		'valentinaprojectwiki' => true,
		'welcomewiki' => true,
		'youtubewiki' => true,
	),
	'wmgUseVoteNY' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'espiralwiki' => true,
		'extloadwiki' => true,
		'openconstitutionwiki' => true,
		'robloxscripterswiki' => true,
		'wikidolphinhansenwiki' => true,
		'wikipucwiki' => true,
	),
	'wmgUseVisualEditor' => array(
		'default' => false, // Please make sure parsoid is enabled on modules/parsoid/manifests/init.pp or modules/parsoid/templates/settings.js (custom domains only)
		'1209wiki' => true,
		'3dicwiki' => true,
		'3dicxyzwiki' => true,
		'8stationwiki' => true,
		'aacenterpriselearningwiki' => true,
		'adnovumwiki' => true,
		'aescapeswiki' => true,
		'ageofenlightenmentwiki' => true,
		'ageofimperialismwiki' => true,
		'ageofimperialistswiki' => true,
		'airwiki' => true,
		'aktposwiki' => true,
		'alanpediawiki' => true,
		'algopediawiki' => true,
		'allbanks2wiki' => true,
		'allthetropeswiki' => true,
		'alwikiwiki' => true,
		'apneuverenigingwiki' => true,
		'applebranchwiki' => true,
		'arabudlandwiki' => true,
		'arguwikiwiki' => true,
		'aryamanwiki' => true,
		'ayrshirewiki' => true,
		'atheneumwiki' => true,
		'augustinianumwiki' => true,
		'aurcusonlinewiki' => true,
		'bgowiki' => true,
		'betapurplewiki' => true,
		'biblicalwikiwiki' => true,
		'bibliowiki' => true,
		'bmedwiki' => true,
		'boulderwikiwiki' => true,
		'braindumpwiki' => true,
		'bttestwiki' => true,
		'carvingwiki' => true,
		'casuarinawiki' => true,
		'cbmediawiki' => true,
		'chandruswethswiki' => true,
		'christipediawiki' => true,
		'cisowiki' => true,
		'civitaswiki' => true,
		'clementsworldbuildingwiki' => true,
		'clicordiwiki' => true,
		'cnvwiki' => true,
		'corydoctorowwiki' => true,
		'cssandjsschoolboardwiki' => true,
		'cybersecuritywiki' => true,
		'cvsmbwiki' => true,
		'dalarwiki' => true,
		'datachronwiki' => true,
		'detlefswiki' => true,
		'developmentwiki' => true,
		'dicficwiki' => true,
		'dishwiki' => true,
		'dmwwiki' => true,
		'doinwiki' => true,
		'dottorcontewiki' => true,
		'drones4allwiki' => true,
		'dtswiki' => true,
		'dwplivewiki' => true,
		'easywikiwiki' => true,
		'elainarmuawiki' => true,
		'ernaehrungsrathhwiki' => true,
		'espiralwiki' => true,
		'esswaywiki' => true,
		'etpowiki' => true,
		'evawiki' => true,
		'evelopediawiki' => true,
		'extloadwiki' => true,
		'ezdmfwiki' => true,
		'fablabesdswiki' => true,
		'fbwikiwiki' => true,
		'fishpercolatorwiki' => true,
		'fmbvwiki' => true,
		'foodsharinghamburgwiki' => true,
		'frontdeskswiki' => true,
		'geirpediawiki' => true,
		'genwiki' => true,
		'gncwiki' => true,
		'grandtheftwikiwiki' => true,
		'gzewiki' => true,
		'hftqmswiki' => true,
		'hobbieswiki' => true,
		'hshsinfoportalwiki' => true,
		'hsoodenwiki' => true,
		'hytecwiki' => true,
		'ilearnthingswiki' => true,
		'imstswiki' => true,
		'inazumaelevenwiki' => true,
		'ircwiki' => true,
		'islamwissenschaftwiki' => true,
		'izanagiwiki' => true,	
		'jakeperswiki' => true,
		'janesskillspackwiki' => true,
		'jayuwikiwiki' => true,
		'justinbieberwiki' => true,
		'kassaiwiki' => true,
		'karniarutheniawiki' => true,
		'kinderacicwiki' => true,
		'lancemedicalwiki' => true,
		'lbsgeswiki' => true,
		'lclwikiwiki' => true,
		'lezar224wiki' => true,
		'lingnlangwiki' => true,
		'littlebigplanetwiki' => true,
		'lizardwiki' => true,
		'lovelivewiki' => true,
		'luckandlogicwiki' => true,
		'lunfengwiki' => true,
		'maiasongcontestwiki' => true,
		'marcoschriekwiki' => true,
		'make717wiki' => true,
		'menufeedwiki' => true,
		'meregoswiki' => true,
		'metawiki' => true,
		'mikrodevwiki' => true,
		'muckhackwiki' => true,
		'musicarchivewiki' => true,
		'musiclibrarywiki' => true,
		'musictabswiki' => true,
		'mydegreewiki' => true,
		'mylogicwiki' => true,
		'ndnwiki' => true,
		'neuronpediawiki' => true,
		'newarkmanorwiki' => true,
		'newcolumbiawiki' => true,
		'newknowledgewiki' => true,
		'newtrendwiki' => true,
		'nextlevelwikiwiki' => true,
		'nidda23wiki' => true,
		'noalatalawiki' => true,
		'nvcwiki' => true,
		'nwpwiki' => true,
		'ofthevampirewiki' => true,
		'oncprojectwiki' => true,
		'openconstitutionwiki' => true,
		'opengovpioneerswiki' => true,
		'oyeavdelingenwiki' => true,
		'panoramawiki' => true,
		'paodeaodawiki' => true,
		'partupwiki' => true,
		'pbmwiki' => true,
		'permanentfuturelabwiki' => true,
		'pflanzenwiki' => true,
		'pqwiki' => true,
		'porpwiki' => true,
		'priyowiki' => true,
		'pso2wiki' => true,
		'purpanrangueiluswiki' => true,
		'qwertywiki' => true,
		'rawdatawiki' => true,
		'recherchesdocumentaireswiki' => true,
		'ricwiki' => true,
		'robloxscripterswiki' => true,
		'rocketleaguequebecwiki' => true,
		'rpcharacterswiki' => true,
		'safiriawiki' => true,
		'savagewikiwiki' => true,
		'secondcirclewiki' => true,
		'seldirwiki' => true,
		'setonwiki' => true,
		'shoppingwiki' => true,
		'sidemwiki' => true,
		'simonjonwiki' => true,
		'sirikotwiki' => true,
		'sjuhabitatwiki' => true,
		'skyfireflyffwiki' => true,
		'snowthegamewiki' => true,
		'soshomophobiewiki' => true,
		'southparkfanwiki' => true,
		'spiralwiki' => true,
		'starsetonlinewiki' => true,
		'stellachronicawiki' => true,
		'sthomaspriwiki' => true,
		'studynotekrwiki' => true,
		'takethatwikiwiki' => true,
		'taylorwiki' => true,
		'techeducationwiki' => true,
		'tcc6640wiki' => true,
		'teleswikiwiki' => true,
		'testwiki' => true,
		'thefosterswiki' => true,
		'thehushhushsagawiki' => true,
		'theworldwiki' => true,
		'tmewiki' => true,
		'tochkiwiki' => true,
		'torejorgwiki' => true,
		'touhouenginewiki' => true,
		'trexwiki' => true,
		'unikumwiki' => true,
		'universebuildwiki' => true,
		'urho3dwiki' => true,
		'valentinaprojectwiki' => true,
		'videogameswiki' => true,
		'vrgowiki' => true,
		'wabcwiki' => true,
		'walthamstowlabourwiki' => true,
		'webflowwiki' => true,
		'wikibookswiki' => true,
		'wikicervanteswiki' => true,
		'wikidolphinhansenwiki' => true,
		'wikihoyowiki' => true,
		'wikikaisagawiki' => true,
		'wikipucwiki' => true,
		'wisdomsandboxwiki' => true,
		'wisdomwikiwiki' => true,
		'worldbuildingwiki' => true,
		'wthsapgovwiki' => true,
		'xdjibiwiki' => true,
		'yourosongcontestwiki' => true,
		'youtubewiki' => true,
	),
	'wmgUseVariables' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'ayrshirewiki' => true,
		'bgowiki' => true,
		'extloadwiki' => true,
		'eotewiki' => true,
		'marcoschriekwiki' => true,
		'secondcirclewiki' => true,
		'szkwiki' => true,
		'takethatwikiwiki' => true,
		'walthamstowlabourwiki' => true,
		'wikikaisagawiki' => true,
	),
	'wmgUseWebChat' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
		'pnphilotenwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
	),
	'wmgUseWidgets' => array(
		'default' => false,
		'aemanualwiki' => true,
		'amaninfowiki' => true,
		'ayrshirewiki' => true,
		'extloadwiki' => true,
		'geodatawiki' => true,
		'muckhackwiki' => true,
		'plazmaburstwiki' => true,
		'soshomophobiewiki' => true,
		'takethatwikiwiki' => true,
		'wikipucwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
	),
	'wmgUseWikibaseRepository' => array(
		'default' => false,
		'extloadwiki' => true,
	),
	'wmgUseWikiForum' => array(
		'default' => false, // disables captcha on all actions
	//	'applebranchwiki' => true,
	//	'alwikiwiki' => true,
	//	'applewikiwiki' => true,
	//	'entropediawiki' => true,
		'extloadwiki' => true,
	//	'indexwiki' => true,
	//	'ircwiki' => true,
	//	'porpwiki' => true,
	//	'starsetonlinewiki' => true,
	//	'stellachronicawiki' => true,
	//	'wikicervanteswiki' => true,
	//	'wisdomwikiwiki' => true,
	//	'wisdomsandboxwiki' => true,
	),
	'wmgUsewikihiero' => array(
		'default' => false,
		'extloadwiki' => true,
		'jackperswiki' => true,
	),
	'wmgUseWikiLove' => array(
		'default' => false,
		'applebranchwiki' => true,
		'applewikiwiki' => true,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseWikiTextLoggedInOut' => array(
		'default' => false,
		'allthetropeswiki' => true,
		'extloadwiki' => true,
	),
	'wmgUseYouTube' => array(
		'default' => false,
		'1209wiki' => true,
		'airwiki' => true,
		'alanpediawiki' => true,
		'allthetropeswiki' => true,
		'aktposwiki' => true,
		'apolcourseswiki' => true,
		'biuwiki' => true,
		'bmedwiki' => true,
		'carvingwiki' => true,
		'christipediawiki' => true,
		'corydoctorowwiki' => true,
		'datachronwiki' => true,
		'developmentwiki' => true,
		'dmwwiki' => true,
		'doinwiki' => true,
		'doraemonpediawiki' => true,
		'dwplivewiki' => true,
		'eternalconfictwiki' => true,
		'elainarmuawiki' => true,
		'evawiki' => true,
		'evelopediawiki' => true,
		'extloadwiki' => true,
		'florianoromanowiki' => true,
		'freecollegeprojectwiki' => true,
		'geirpediawiki' => true,
		'geodatawiki' => true,
		'inazumaelevenwiki' => true,
		'islamwissenschaftwiki' => true,
		'izanagiwiki' => true,
		'jakeperswiki' => true,
		'jayuwikiwiki' => true,
		'janesskillspackwiki' => true,
		'lclwikiwiki' => true,
		'lifewiki' => true,
		'luckandlogicwiki' => true,
		'marcoschriekwiki' => true,
		'mikrodevwiki' => true,
		'muckhackwiki' => true,
		'ndnwiki' => true,
		'noalatalawiki' => true,
		'ontariobrasswiki' => true,
		'openonderwijswiki' => true,
		'plazmaburstwiki' => true,
		'priyowiki' => true,
		'rpgbrigadewiki' => true,
		'secondcirclewiki' => true,
		'starsetonlinewiki' => true,
		'sthomaspriwiki' => true,
		'szkwiki' => true,
		'takethatwikiwiki' => true,
		'testwiki' => true,
		'tmewiki' => true,
		'urho3dwiki' => true,
		'valentinaprojectwiki' => true,
		'wikipucwiki' => true,
		'wisdomwikiwiki' => true,
		'wisdomsandboxwiki' => true,
		'worldpediawiki' => true,
		'webflowwiki' => true,
		'yacresourceswiki' => true,
	),

	// External link target
	'wgExternalLinkTarget' => array(
		'default' => false,
		'cpiwiki' => '_blank',
		'doinwiki' => '_blank',
		'forexwiki' => '_blank',
		'sylwiki' => '_blank',
		'vrgowiki' => '_blank',
		'wisdomwikiwiki' => '_blank',
		'wisdomsandboxwiki' => '_blank',
		'yacresourceswiki' => '_blank',
	),

	// FlaggedRevs
	'wmgFlaggedRevsNamespaces' => array(
		'default' => array(
			NS_MAIN,
			NS_FILE,
			NS_TEMPLATE,
			NS_HELP,
			NS_PROJECT,
		),
		'trexwiki' => array(
			NS_ARTIKEL,
			NS_FILE,
			NS_TEMPLATE,
		),
	),
	'wmgFlaggedRevsProtection' => array(
		'default' => false,
	),
	'wmgFlaggedRevsTags' => array(
		'default' => array(
			'status' => array(
				'quality' => 1,
				'levels' => 2,
				'pristine' => 3,
			),
		),
	),
	'wmgFlaggedRevsTagsRestrictions' => array(
		'default' => array(
			'status' => array(
				'review' => 1,
				'autoreview' => 1,
			),
		),
	),
	'wmgFlaggedRevsTagsAuto' => array(
		'default' => array(
			'status' => 1,
		),
	),
	'wmgFlaggedRevsAutopromote' => array(
		'default' => array(
			'days' => 14,
			'edits' => 100,
			'excludeLastDays' => 1,
			'benchmarks' => 1,
			'spacing' => 1,
			'totalContentEdits' => 100,
			'totalCheckedEdits' => 100,
			'uniqueContentPages' => 10,
			'editComments' => 80,
			'userpageBytes' => 1,
			'neverBlocked' => true,
			'maxRevertedEditRatio'=> .05,
		),
	),
	'wmgFlaggedRevsAutoReview' => array(
		'default' => true,
	),
	'wmgFlaggedRevsRestrictionLevels' => array(
		'default' => array( '', 'sysop' ),
	),

	// Files
	'wgEnableUploads' => array(
		'default' => true,
	),
	'wgAllowCopyUploads' => array(
		'default' => false,
		'applebranchwiki' => true,
		'applewikiwiki' => true,
		'catboxwiki' => true,
		'entropediawiki' => true,
		'ndnwiki' => true,
	),
	'wgCopyUploadsFromSpecialUpload' => array(
		'default' => false,
		'applebranchwiki' => true,
		'applewikiwiki' => true,
		'catboxwiki' => true,
		'entropediawiki' => true,
		'ndnwiki' => true,
	),
	'wgFileExtensions' => array(
		'default' => array( 'gif', 'ico', 'jpeg', 'jpg', 'ogg', 'png', 'svg', 'pdf' ),
		'+amaninfowiki' => array('pcap', 'cap' ),
		'+doinwiki' => array('pdf', 'ppt', 'pptx', 'xls', 'xlxs', 'zip' ),
		'+exitsincwiki' => array('txt' ),
		'+oyeavdelingenwiki' => array( 'docx', 'doc', 'odt', 'ods', 'odp', 'xls', 'xlsx'),
		'+techeducationwiki' => array( 'docx', 'doc', 'odt', 'ods', 'odp', 'ppt', 'xls', 'xlsx','xml'),
		'+wisdomwikiwiki' => array( 'docx', 'doc', 'odt', 'ods', 'odp', 'xls', 'xlsx', 'txt', 'rtf', 'zip'),
		'+wisdomsandboxwiki' => array( 'docx', 'doc', 'odt', 'ods', 'odp', 'xls', 'xlsx', 'txt', 'rtf', 'zip'),
	),
	'wgUseInstantCommons' => array(
		'default' => true,
		'amaninfowiki' => false,
		'pso2wiki' => false,
		'thefosterswiki' => false,
	),
	'wgEnableImageWhitelist' => array(
		'default' => false,
	),
	'wgShowArchiveThumbnails' => array(
		'default' => true,
		'doinwiki' => false,
	),

	// Flow
	'wmgFlowDefaultNamespaces' => array(
		'default' => false,
		'8stationwiki' => true,
		'allthetropeswiki' => true,
		'espiralwiki' => true,
	        'fbwikiwiki' => true,
		'muckhackwiki' => true,
		'permanentfuturelabwiki' => true,
		'spiralwiki' => true,
	),

	// GlobalBlocking
	'wgApplyGlobalBlocks' => array(
		'default' => true,
		'metawiki' => false,
	),
	'wgGlobalBlockingDatabase' => array(
		'default' => 'centralauth', // use centralauth for global blocks
	),
	
	// GlobalCssJs
	'wgGlobalCssJsConfig' => array(
		'default' => array(
			'wiki' => 'metawiki',
			'source' => 'metawiki',
		),
	),
	'+wgResourceLoaderSources' => array(
		'default' => array(
			'metawiki' => array(
				'apiScript' => '//meta.miraheze.org/w/api.php',
				'loadScript' => '//meta.miraheze.org/w/load.php',
			),
		),
	),
	'wgUseGlobalSiteCssJs' => array(
		'default' => false,
	),

	// HighlightLinks
	'wgHighlightLinksInCategory' => array(
		'default' => array(),
		'allthetropeswiki' => array(
			'Trope' => 'trope',
			'YMMV_Trope' => 'ymmv',
		),
		'extloadwiki' => array(
			'Trope' => 'trope',
		),
	),

	// ImageMagick
	'wgUseImageMagick' => array(
		'default' => true,
	),
	'wgImageMagickCommand' => array(
		'default' => '/usr/bin/convert',
	),

	// Interwiki
	'wgInterwikiCentralDB' => array(
		'default' => 'metawiki',
	),

	// Job Queue
	'wgJobRunRate' => array(
		'default' => 0,
	),

	// Language
	'wgLanguageCode' => array( // Hardcode "en"
		'default' => 'en',
	),

	// License
	'wgRightsIcon' => array(
		'default' => 'https://meta.miraheze.org/w/resources/assets/licenses/cc-by-sa.png',
		'compilerdevwiki' => 'https://meta.miraheze.org/w/resources/assets/licenses/cc-0.png',
		'diavwiki' => "//$wmgUploadHostname/diavwiki/f/fc/Copyrighted_Content.png",
		'espiralwiki' => 'https://meta.miraheze.org/w/resources/assets/licenses/cc-0.png',
		'libertywikiwiki' => 'http://creativecommons.org.nz/wp-content/uploads/2012/05/by-nc-sa1.png',
		'rezeroswiki' => 'https://meta.miraheze.org/w/resources/assets/licenses/cc-by-nc-sa.png',
		'safiriawiki' => 'https://meta.miraheze.org/w/resources/assets/licenses/cc-by-nc-sa.png',
		'sourcewiki' => 'https://source.miraheze.org/wiki/Source_Code_Wiki:Copyrights',
		'spiralwiki' => 'https://meta.miraheze.org/w/resources/assets/licenses/cc-0.png',
		'wisdomwikiwiki' => 'https://mirrors.creativecommons.org/presskit/buttons/88x31/png/by-nc-nd.png',
		'universebuildwiki' => 'https://meta.miraheze.org/w/resources/assets/licenses/cc-by-nc-sa.png',
	),
	'wgRightsPage' => array(
		'default' => '',
		'developmentwiki' => 'Official:Copyrights',
		'diavwiki' => 'Project:Copyrights',
		'sourcewiki' => 'Project:Copyrights',
		'wisdomwikiwiki' => 'Copyleft',
	),
	'wgRightsText' => array(
		'default' => 'Creative Commons Attribution Share Alike',
		'arasuithielwiki' => 'Creative Commons Attribution-NonCommercial-ShareAlike',
		'compilerdevwiki' => 'CC0 Public Domain',
		'diavwiki' => 'All Rights Reserved',
		'espiralwiki' => 'CC0 Public Domain',
		'metatrekwiki' => 'Creative Commons Attribution-NonCommercial-ShareAlike',
		'libertywikiwiki' => 'Attribution-NonCommercial-ShareAlike 3.0 Unported',
		'oyeavdelingenwiki' => 'All Rights Reserved',
		'rezeroswiki' => 'Creative Commons Attribution-NonCommercial-ShareAlike',
		'safiriawiki' => 'Creative Commons Attribution-NonCommercial-ShareAlike',
		'sourcewiki' => 'Wiki copyright information.',
		'spiralwiki' => 'CC0 Public Domain',
		'wisdomwikiwiki' => 'Creative Commons Attribution-NonCommercial-NoDerivatives',
		'universebuildwiki' => 'Creative Commons Attribution-NonCommercial-ShareAlike',
	),
	'wgRightsUrl' => array(
		'default' => 'https://creativecommons.org/licenses/by-sa/3.0/',
		'arasuithielwiki' => 'https://creativecommons.org/licenses/by-nc-sa/3.0/',
		'compilerdevwiki' => 'https://creativecommons.org/publicdomain/zero/1.0/',
		'espiralwiki' => 'https://creativecommons.org/publicdomain/zero/1.0/',
		'jayuwikiwiki' => 'https://creativecommons.org/licenses/by-sa/4.0/',
		'kwikiwiki' => 'https://creativecommons.org/licenses/by-sa/4.0/',
		'libertywikiwiki' => 'https://creativecommons.org/licenses/by-nc-sa/3.0/',
		'metatrekwiki' => 'https://creativecommons.org/licenses/by-nc-sa/4.0/',
		'rezeroswiki' => 'https://creativecommons.org/licenses/by-nc-sa/2.0/',
		'safiriawiki' => 'https://creativecommons.org/licenses/by-nc-sa/4.0/',
		'sourcewiki' => 'https://source.miraheze.org/wiki/Source_Code_Wiki:Copyrights',
		'spiralwiki' => 'https://creativecommons.org/publicdomain/zero/1.0/',
		'ujhswiki' => 'https://creativecommons.org/licenses/by-sa/4.0/',
		'wisdomwikiwiki' => 'https://creativecommons.org/licenses/by-nc-nd/4.0/',
		'universebuildwiki' => 'https://creativecommons.org/licenses/by-nc-sa/4.0/',
	),

	// Links
	'+wgUrlProtocols' => array(
	    'default' => array(),
		// file protocol only allowed on private wikis
		'gzewiki' => array ( "file://" ),
	),

	// Mail
	'wgEnableEmail' => array(
		'default' => true,
	),
	'wgPasswordSender' => array(
		'default' => 'noreply@miraheze.org',
	),
	'wgSMTP' => array(
		'default' => array(
			'host' => 'mail.miraheze.org',
			'port' => 25,
			'IDHost' => 'miraheze.org',
			'auth' => true,
			'username' => 'noreply',
			'password' => $wmgSMTPPassword,
		),
	),
	'wgEnotifWatchlist' => array(
		'default' => true,
	),
	'wgUserEmailUseReplyTo' => array(
		'default' => true,
	),

	// Math
	'wgMathValidModes' => array(
		'default' => array( 'png' ),
	),
	'wgTexvc' => array(
		'default' => '/usr/bin/texvc',
	),

	// ManageWiki
	'wgManageWikiMainDatabase' => array(
		'default' => 'metawiki',
	),
	'wgEnableManageWiki' => array(
		'default' => false,
		'extloadwiki' => true,
		'metawiki' => true,
	),
	
	// MassMessage
	'wgAllowGlobalMessaging' => array(
		'default' => false,
		'metawiki' => true,
	),
	'wgNamespacesToPostIn' => array(
		'default' => array( NS_PROJECT ),
		'+bgowiki' => array(
			NS_MAIN,
			NS_PROJECT,
		),
	),
	
	// Metrolook settings
	'wgMetrolookDownArrow' => array(
		'default' => true,
		'allthetropeswiki' => false,
		'ayrshirewiki' => false,
		'thelonsdalebattalionwiki' => false,
	),
	'wgMetrolookUploadButton' => array(
		'default' => true,
		'allthetropeswiki' => false,
	),
	'wgMetrolookBartile' => array(
		'default' => true,
		'ayrshirewiki' => false,
		'thelonsdalebattalionwiki' => false,
	),
	'wgMetrolookMobile' => array(
		'default' => true,
		'ayrshirewiki' => false,
	),
	'wgMetrolookUseIconWatch' => array(
		'default' => true,
		'ayrshirewiki' => false,
	),
	'wgMetrolookLine' => array(
		'default' => true, 
		'ayrshirewiki' => false,
	),

	// MirahezeMagic
	// https://meta.miraheze.org/wiki/Dormancy_Policy/Exceptions
	'wgFindInactiveWikisWhitelist' => array(
		'default' => array(
			'metawiki',
			'allthetropeswiki',
			'bitcoindebateswiki',
			'spiralwiki',
			'extloadwiki',
			'loginwiki',
			'testwiki',
			'throisarwiki',
		),
	),
	
	// Misc. stuff
	'wgSitename' => array(
		'default' => 'No sitename set!',
	),
	'wgAllowDisplayTitle' => array(
		'default' => true,
	),
	'wgRestrictDisplayTitle' => array(
		'default' => true, // Wikis with NoTitle have it set to false
		'takethatwikiwiki' => false,
	),
	
	// MobileFrontend
	'wmgMFAutodetectMobileView' => array(
		'default' => true,
		'trexwiki' => false,
	),

	// MsCatSelect vars
	'wgMSCS_WarnNoCategories' => array(
		'default' => true,
	),

	// MsUpload settings
	'wgMSU_useDragDrop' => array(
		'default' => false,
		'anduinwiki' => true,
	),
	
	'wgMSU_showAutoCat' => array(
		'default' => false,
		'anduinwiki' => true,
	),
	
	'wgMSU_checkAutoCat' => array(
		'default' => false,
		'anduinwiki' => true,
	),
	
	'wgMSU_confirmReplace' => array(
		'default' => false,
		'anduinwiki' => true,
	),
	
	// MultimediaViewer (not beta)
	'wgMediaViewerEnableByDefault' => array(
		'extloadwiki' => true,
		'robloxscripterswiki' => true,
		'thefosterswiki' => true,
		'thelonsdalebattalionwiki' => true,
	),
	// Namespaces
	'wgExtraNamespaces' => array(
		'default' => array(),
		'adiapediawiki' => array(
			NS_DICT => 'Dict',
			NS_DICT_TALK => 'Dict_talk',
		),
		'adnovumwiki' => array(
			NS_PORTAL => 'Portal',
			NS_PORTAL_TALK => 'Portal_talk',
			NS_HELP => 'Help',
			NS_HELP_TALK => 'Help_talk',
		),
		'allthetropeswiki' => array(
			NS_TROPEWORKSHOP => 'Trope_Workshop',
			NS_TROPEWORKSHOP_TALK => 'Trope_Workshop_talk',
			NS_REVIEWS => 'Reviews',
			NS_REVIEWS_TALK => 'Reviews_talk',
			NS_FEATURED => 'Featured_Page',
			NS_FEATURED_TALK => 'Featured_Page_talk',
		),
		'catboxwiki' => array(
			NS_COMIC => 'Comic',
			NS_COMIC_TALK => 'Comic_talk'
		),
		'developmentwiki' => array(
			NS_OFFICIAL => 'Official',
			NS_OFFICIAL_TALK => 'Official_talk',
		),
		'humorpediawiki' => array(
			NS_PORTAL => 'Portal',
			NS_PORTAL_TALK => 'Portal_talk',
		),
		'hydrawikiwiki' => array(
			NS_RESEARCH => "Research",
			NS_RESEARCH_TALK => "Research_talk",
			NS_ADMIN => "Admin",
			NS_ADMIN_TALK => "Admin_talk",
			NS_WORKSHOP => "Workshop",
			NS_WORKSHOP_TALK => "Workshop_talk",
			NS_SELP => "Selp",
			NS_SELP_TALK => "Selp_talk",
		),
		'metawiki' => array(
			NS_TECH => 'Tech',
			NS_TECH_TALK => 'Tech_talk'
		),
		'noalatalawiki' => array(
			NS_PORTAL => 'Portal',
			NS_PORTAL_TALK => 'Portal_talk',
		),
		'ratanpirwiki' => array(
			NS_PORTAL => 'Portal',
			NS_PORTAL_TALK => 'Portal_talk',
		),
		'reviwiki' => array(
			NS_SERVER => 'Server',
			NS_SERVER_TALK => 'Server_talk',
		),
		'rpgbrigadewiki' => array(
			NS_VIDEO => 'Video',
			NS_VIDEO_TALK => 'Video_talk',
		),
		'safiriawiki' => array(
			NS_HOENN => 'Hoenn',
			NS_HOENN_TALK => 'Hoenn_talk',
		),
		'studynotekrwiki' => array(
			NS_STUDY_NOTE => 'Study note',
			NS_STUDY_NOTE_TALK => 'Study note_talk',
			NS_EXPLANATION => 'Explanation',
			NS_EXPLANATION_TALK => 'Explanation_talk',
		),
		'thelonsdalebattalionwiki' => array(
			NS_GLOSSARY => 'Glossary',
			NS_GLOSSARY_TALK => 'Glossary_talk',
		),
		'+trexwiki' => array(
			NS_HALAMAN => 'Halaman',
			NS_HALAMAN_TALK => 'Permbicaraan_Halaman',
			NS_ARTIKEL => 'Artikel',
			NS_ARTIKEL_TALK => 'Artikel_talk',
		),
		'tmewiki' => array(
			NS_PORTAL => 'Portal',
			NS_PORTAL_TALK => 'Portal_talk',
			NS_CALL_OF_DUTY => 'Call_of_Duty',
			NS_CALL_OF_DUTY_TALK => 'Call_of_Duty_talk',
			NS_MINECRAFT => 'Minecraft',
			NS_MINECRAFT_TALK => 'Minecraft_talk',
			NS_SUPER_MARIO_LAND_2 => 'Super_Mario_Land_2',
			NS_SUPER_MARIO_LAND_2_TALK => 'Super_Mario_Land_2_talk',
			NS_SUPER_MARIO_WORLD_2 => 'Super_Mario_World_2',
			NS_SUPER_MARIO_WORLD_2_TALK => 'Super_Mario_World_2_talk',
			NS_SUPER_MARIO_BROS => 'Super_Mario_Bros.',
			NS_SUPER_MARIO_BROS_TALK => 'Super_Mario_Bros._talk',
			NS_SUPER_MARIO_ADVANCE => 'Super_Mario_Advance',
			NS_SUPER_MARIO_ADVANCE_TALK => 'Super_Mario_Advance_talk',
			NS_SUPER_MARIO_ADVANCE_2 => 'Super_Mario_Advance_2',
			NS_SUPER_MARIO_ADVANCE_2_TALK => 'Super_Mario_Advance_2_talk',
			NS_SUPER_MARIO_ADVANCE_3 => 'Super_Mario_Advance_3',
			NS_SUPER_MARIO_ADVANCE_3_TALK => 'Super_Mario_Advance_3_talk',
			NS_SUPER_MARIO_ADVANCE_4 => 'Super_Mario_Advance_4',
			NS_SUPER_MARIO_ADVANCE_4_TALK => 'Super_Mario_Advance_4_talk',
			NS_THE_LEGEND_OF_ZELDA => 'The_Legend_of_Zelda',
			NS_THE_LEGEND_OF_ZELDA_TALK => 'The_Legend_of_Zelda_talk',
		),
		'wisdomwikiwiki' => array(
			NS_LCS	=> 'LCS',
			NS_LCS_TALK => 'LCS_talk',
			NS_MEDI => 'Medi',
			NS_MEDI_TALK => 'Medi_talk',
			NS_LIBRARY => 'Library',
			NS_LIBRARY_TALK => 'Library_talk',
			NS_TEACHING => 'Teaching',
			NS_TEACHING_TALK => 'Teaching_talk',
			NS_BLANK => 'Blank',
			NS_BLANK_TALK => 'Blank_talk',
		),
		'wisdomsandboxwiki' => array(
			NS_TEST	=> 'TEST',
			NS_TEST_TALK => 'TEST_talk',
		),	
		'whentheycrywiki' => array(
			NS_SPRITES => 'Sprites',
			NS_SPRITES_TALK => 'Sprites_talk',
			NS_GALLERY => 'Gallery',
			NS_GALLERY_TALK => 'Gallery_talk',
		),
	),
	'wgContentNamespaces' => array(
		'default' => array( NS_MAIN ),
		'+catboxwiki' => array( NS_COMIC ),
		'+reviwiki' => array( NS_SERVER ),
		'+safiriawiki' => array( NS_HOENN ),
		'+tmewiki' => array( NS_CALL_OF_DUTY, NS_MINECRAFT, NS_SUPER_MARIO_LAND_2, NS_SUPER_MARIO_WORLD_2, NS_SUPER_MARIO_BROS, NS_SUPER_MARIO_ADVANCE_2, NS_SUPER_MARIO_ADVANCE_3, NS_SUPER_MARIO_ADVANCE_4, NS_THE_LEGEND_OF_ZELDA ),
	),
	'wgMetaNamespace' => array(
	    'default' => null,
	    'tmewiki' => 'TME',
	),
	'+wgNamespaceAliases' => array(
		'default' => array(),
		'+adnovumwiki' => array(
			'ARP' => NS_PROJECT,
			'ARP_talk' => NS_PROJECT_TALK,
			'H' => NS_HELP,
			'H_talk' => NS_HELP_TALK,
		),
		'+allthetropeswiki' => array(
			'ATT' => NS_PROJECT,
			'ATT_talk' => NS_PROJECT_TALK,
			'YKTTW' => NS_TROPEWORKSHOP,
			'YKTTW_talk' => NS_TROPEWORKSHOP_TALK,
			'Blurb' => NS_FEATURED,
			'Blurb_talk' => NS_FEATURED_TALK,
		),
		'+humorpediawiki' => array(
			'HP' => NS_PROJECT,
			'HP_talk' => NS_PROJECT_TALK,
		),
		'+studynotekrwiki' => array(
			'KSN' => NS_KOREAN_STUDY_NOTE,
			'KSN_TALK' => NS_KOREAN_STUDY_NOTE_TALK,
		),
		'+tmewiki' => array(
			'The_Multilingual_Encyclopedia' => NS_PROJECT,
			'The_Multilingual_Encyclopedia_talk' => NS_PROJECT_TALK,
			'Bestand' => NS_FILE,
			'Fichier' => NS_FILE,
			'Categorie' => NS_CATEGORY,
			'Catégorie' => NS_CATEGORY,
			'Categoría' => NS_CATEGORY,
			'Archivo' => NS_FILE,
			'Módulo' => WMG_NS_MODULE,
			'Especial' => NS_SPECIAL,
			'Espesyal' => NS_SPECIAL,
			'Specialaĵo' => NS_SPECIAL,
			'Specialis' => NS_SPECIAL,
			'Категория' => NS_CATEGORY,
			'Портал' => NS_PORTAL,
			'Служебная' => NS_SPECIAL,
			'Kuva' => NS_FILE,
			'Luokka' => NS_CATEGORY,
			'Dosiero' => NS_FILE,
			'Kategorio' => NS_CATEGORY,
			'Файл' => NS_FILE,
			'Modèle' => NS_TEMPLATE,
			'Aide' => NS_HELP,
			'Plik' => NS_FILE,
			'Kategoria' => NS_CATEGORY,
			'Specjalna' => NS_SPECIAL,
			'Szablon' => NS_TEMPLATE,
			'Pomoc' => NS_HELP,
			'Moduł' => WMG_NS_MODULE,
			'Datei' => NS_FILE,
			'Fil' => NS_FILE,
			'Skabelon' => NS_TEMPLATE,
			'Kategori' => NS_CATEGORY,
			'Predefinição' => NS_TEMPLATE,
			'Imagem' => NS_IMAGE,
			'画像' => NS_FILE,
		),
	),
	'+wgNamespacesToBeSearchedDefault' => array(
		'default' => array(),
		'+metawiki' => array(
			NS_TECH => true,
		),
		'+thelonsdalebattalionwiki' => array(
			NS_GLOSSARY => true,
		),
	),
	'+wgNamespacesWithSubpages' => array(
		'default' => array(),
		'+adnovumwiki' => array(
			NS_MAIN => true,
			NS_USER => true,
			NS_TEMPLATE => true,
			NS_PORTAL => true,
			NS_HELP => true,
		),
		'+allthetropeswiki' => array(
			NS_MAIN => true,
			NS_TROPEWORKSHOP => true,
		),
		'+catboxwiki' => array(
			NS_MAIN => true,
			NS_COMIC => true,
			NS_OFFICIAL => true,
			NS_TEMPLATE => true,
		),
		'+clementsworldbuildingwiki' => array(
			NS_MAIN => true,
		),
		'+eotewiki' => array(
			NS_MAIN => true,
		),
		'+hobbieswiki' => array(
			NS_MAIN => true,
		),
		'+humorpediawiki' => array(
			NS_TALK => true,
		),
		'+janesskillspackwiki' => array(
			NS_MAIN => true,
			NS_USER => true,
			NS_PROJECT => true,
		),
		'+metawiki' => array(
			NS_MAIN => true,
		),
		'+partupwiki' => array(
			NS_MAIN => true,
		),
		'+reviwiki' => array(
			NS_MAIN => true,
			NS_SERVER => true,
		),
		'+safiriawiki' => array(
			NS_MAIN => true,
			NS_HOENN => true,
		),
		'+tmewiki' => array(
			NS_MAIN => true,
			NS_USER => true,
			NS_PROJECT => true,
			NS_TEMPLATE => true,
			NS_PORTAL => true,
			NS_CALL_OF_DUTY => true,
		),
		'+unikumwiki' => array(
			NS_MAIN => true,
		),
		'+wisdomwikiwiki' => array(
			NS_MAIN => true,
			NS_LCS => true,
			NS_LIBRARY => true,
			NS_TEACHING => true,
		),
		'+wisdomsandboxwiki' => array(
			NS_MAIN => true,
			NS_TEST => true,
		),
	),

	// OATHAuth
	'wgOATHAuthDatabase' => array(
		'default' => 'centralauth',
	),

	// OAuth
	'wgMWOAuthCentralWiki' => array(
		'default' => 'metawiki',
	),
	'wgMWOAuthSharedUserSource' => array(
		'default' => 'CentralAuth',
	),
	'wgMWOAuthSecureTokenTransfer' => array(
		'default' => true,
	),
	
	// Pagelang
	'wgPageLanguageUseDB' => array(
		'default' => false,
		'spiralwiki' => true,
	),

	//PageTriage
	'wgPageTriageInfinitScrolling' => array(
		'default' => true,
		'jackperswiki' => false,
	),

	// Permissions
	'wgAddGroups' => array(
		'default' => array(
			'bureaucrat' => array(
				'bot',
				'bureaucrat',
				'sysop',
			),
			'sysop' => array(
				'autopatrolled',
				'confirmed',
				'rollbacker',
			),
		),
		'+allthetropeswiki' => array(
			'sysop' => array(
				'commentadmin',
			),
		),
		'+applebranchwiki' => array(
			'sysop' => array(
				'commentadmin',
				'staff',
				'reviewer',
			),
		),
		'+applewikiwiki' => array(
			'sysop' => array(
				'commentadmin',
				'staff',
				'reviewer',
			),
		),
		'+cssandjsschoolboardwiki' => array(
			'Founder' => array(
				'autopatrolled',
				'bot',
				'bureaucrat',
				'confirmed',
				'sysop',
				'rollbacker',
			),
		),
		'+developmentwiki' => array(
			'supervisor' => array(
				'bureaucrat',
				'sysop',
				'trusted',
				'interfaceeditor'
			),
			'wikifounder' => array(
				'supervisor',
				'bureaucrat',
				'sysop',
				'trusted',
				'interfaceeditor'
			),
		),
		'+dpwiki' => array(
			'bureaucrat' => array(
				'respected',
			),
		),
		'+jayuwikiwiki' => array(
			'bureaucrat' => array(
				'voter',
			),
			'sysop' => array(
				'commentadmin',
			),
		),
		'+trexwiki' => array(
			'co' => array(
				'ceo',
			),
			'ceo' => array(
				'autopatrolled',
				'bot',
				'bureaucrat',
				'confirmed',
				'sysop',
				'rollbacker',
				'sysmag',
				'editors',
				'reviewer',
				'autochecked users',
			),
			'bureaucrat' => array(
				'sysmag',
			),
		),
		'+quantumwiki' => array(
			'Founder' => array(
				'autopatrolled',
				'bot',
				'bureaucrat',
				'confirmed',
				'sysop',
				'rollbacker',
			),
		),
		'testwiki' => array(
			'bureaucrat' => array(
				'testgroup',
				'bureaucrat',
				'sysop',
				'confirmed',
				'autopatrolled',
				'rollbacker',
			),
			'consul' => array(
				'bot',
				'bureaucrat',
				'consul',
				'exampleuser',
				'testgroup',
				'sysop',
				'confirmed',
				'autopatrolled',
				'rollbacker',
			),
			'steward' => array(
				'consul',
				'bot',
				'bureaucrat',
				'consul',
				'exampleuser',
				'testgroup',
				'sysop',
				'confirmed',
				'autopatrolled',
				'rollbacker',
			),
		),
		'snowthegamewiki' => array(
			'bureaucrat' => array(
				'bot',
				'bureaucrat',
				'sysop',
			),
		),
		'studynotekrwiki' => array(
			'sysop' => array(
				'voter',
			),
			'bureaucrat' => array(
				'sysop',
				'voter',
				'bot',
				'autopatrolled'
			),
		),
		'+vrgowiki' => array(
			'bureaucrat' => array(
				'Teachers',
			),
		),
		'+walthamstowlabourwiki' => array(
			'sysop' => array(
				'editor-approver',
				'editor',
			),
			'editor-approver' => array(
				'editor-approver',
				'editor',
			),
		),
		'+wikidolphinhansenwiki' => array(
			'sysop' => array(
				'commentadmin',
			),
		),
		'+wikicanadawiki' => array(
			'founder' => array(
				'bureaucrat',
				'banned',
				'founder',
			),
			'moderator' => array(
				'autopatrolled',
				'confirmed',
			),
			'sysop' => array(
				'moderator',
				'tagmanager',
			),
			'bureaucrat' => array(
				'moderator',
				'confirmed',
				'autopatrolled',
				'rollbacker',
			),
		),
	),
	'+wgGroupPermissions' => array(
		'default' => array(
			'*' => array(
				'abusefilter-log' => true,
				'abusefilter-log-detail' => true,
				'abusefilter-view' => true,
				'centralauth-autoaccount' => true,
				'oathauth-enable' => false, // does this work?
			),
			'autopatrolled' => array(
				'autopatrol' => true,
				'patrol' => true,
				'skipcaptcha' => true,
			),
			'autoconfirmed' => array(
				'mwoauthproposeconsumer' => true,
				'mwoauthupdateownconsumer' => true,
				'skipcaptcha' => true,
			),
			'bureaucrat' => array(
				'renameuser' => false,
				'userrights' => false,
			),
			'confirmed' => array(
				'editsemiprotected' => true,
				'patrol' => true,
				'skipcaptcha' => true,
			),
			'oversight' => array(
				'abusefilter-hidden-log' => true,
				'abusefilter-hide-log' => true,
				'browsearchive' => true,
				'deletedhistory' => true,
				'deletedtext' => true,
				'deletelogentry' => true,
				'deleterevision' => true,
				'hideuser' => true,
				'suppressionlog' => true,
				'suppressrevision' => true,
			),
			'rollbacker' => array(
				'rollback' => true,
			),
			'sysop' => array(
				'abusefilter-modify' => true,
				'abusefilter-modify-restricted' => true,
				'abusefilter-revert' => true,
				'deletelogentry' => true,
				'deleterevision' => true,
				'rollback' => true,
			),
			'user' => array(
				'user' => true, // for "Allow logged in users" protection level
			),
			'steward' => array(
				'userrights' => true,
			),
		),
		'+allbanks2wiki' => array(
			'autoconfirmed' => array(
				'edit' => false,
				'createpage' => false,
			),
			'confirmed' => array(
				'edit' => false,
				'createpage' => false,
			),
		),
		'+applebranchwiki' => array(
			'user' => array(
				'upload_by_url' => true,
			),
		),
		'+applewikiwiki' => array(
			'user' => array(
				'upload_by_url' => true,
			),
		),
		'+catboxwiki' => array(
			'user' => array(
				'upload_by_url' => true,
			),
		),
		'+cssandjsschoolboardwiki' => array(
			'Founder' => array(
				'read' => true,
			),
		),
		'+cpiwiki' => array(
			'sysop' => array(
				'masseditregex'
			),
		),
		'+developmentwiki' => array(
			'steward' => array(
				'wikifounder' => true,
				'supervisor' => true,
				'bureaucrat' => true,
			),
			'trusted' => array(
				'editsemiprotected' => true,
				'autoconfirmed' => true,
				'skipcaptcha' => true,
				'autopatrol' => true,
				'patrol' => true,
				'block' => true,
				'protect' => true,
				'delete' => true,
				'move' => true,
			),
			'supervisor' => array(
				'blockemail' => true,
				'block' => true,
				'ipblock-exempt' => true,
				'proxyunbannable' => true,
				'protect' => true,
				'managechangetags' => true,
				'createaccount' => true,
				'flow-delete' => true,
				'deletelogentry' => true,
				'deleterevision' => true,
				'delete' => true,
				'globalblock-whitelist' => true,
				'flow-edit-post' => true,
				'editusercss' => true,
				'edituserjs' => true,
				'editprotected' => true,
				'editsemiprotected' => true,
				'editinterface' => true,
				'autopatrol' => true,
				'importupload' => true,
				'import' => true,
				'flow-lock' => true,
				'patrol' => true,
				'markbotedits' => true,
				'nuke' => true,
				'mergehistory' => true,
				'abusefilter-modify' => true,
				'abusefilter-modify-restricted' => true,
				'move-categorypages' => true,
				'movefile' => true,
				'move' => true,
				'move-subpages' => true,
				'move-rootuserpages' => true,
				'autoconfirmed' => true,
				'noratelimit' => true,
				'suppressredirect' => true,
				'reupload-shared' => true,
				'override-antispoof' => true,
				'tboverride' => true,
				'reupload' => true,
				'skipcaptcha' => true,
				'rollback' => true,
				'abusefilter-revert' => true,
				'browsearchive' => true,
				'massmessage' => true,
				'unblockself' => true,
				'undelete' => true,
				'upload' => true,
				'apihighlimits' => true,
				'mf-uploadbutton' => true,
				'unwatchedpages' => true,
				'deletedhistory' => true,
				'deletedtext' => true,
				'spamblacklistlog' => true,
				'titleblacklistlog' => true,
				'supervisor' => true,
			),
			'bureaucrat' => array(
				'bureaucrat' => true,
			),
			'wikifounder' => array(
				'wikifounder' => true,
			),
			'interfaceeditor' => array(
				'editprotected' => true,
				'editsemiprotected' => true,
				'editinterface' => true,
			),
		),
		'+dpwiki' => array(
			'bureaucrat' => array(
				'bureaucrat' => true,
				'respected' => true,
			),
			'respected' => array(
				'respected' => true,
			),
		),
		'+jayuwikiwiki' => array(
			'autoconfirmed' => array(
				'move' => true,
				'move-subpages' => true,
				'move-categorypages' => true,
				'movefile' => true,
				'move-rootuserpages' => true,
				'upload' => true,
				'reupload-shared' => true,
			),
			'confirmed' => array(
				'move' => true,
				'move-subpages' => true,
				'move-categorypages' => true,
				'movefile' => true,
				'move-rootuserpages' => true,
				'upload' => true,
				'reupload-shared' => true,
			),	
			'sysop' => array(
				'commentadmin' => true,
			),
			'voter' => array(
				'delete' => true,
				'browsearchive' => true,
				'deleterevision' => true,
				'deletedtext' => true,
				'suppressedredirect' => true,
				'voter' => true,
				'autopatrol' => true,
				'patrol' => true,
				'skipcaptcha' => true,
				'editsemiprotected' => true,
				'rollback' => true,
			),
		),
		'+sthomaspriwiki' => array(
			'bureaucrat' => array(
				'block' => true,
				'blockemail' => true,
			),
		),
		'+metawiki' => array(
			'steward' => array(
				'abusefilter-modify-global' => true,
				'centralauth-lock' => true,
				'centralauth-oversight' => true,
				'centralauth-rename' => true,
				'centralauth-unmerge' => true,
				'createwiki' => true,
				'managewiki' => true,
				'managewiki-restricted' => true,
				'noratelimit' => true,
				'userrights' => true,
				'userrights-interwiki' => true,
			),
			'sysop' => array(
				'interwiki' => true,
				'oathauth-enable' => true,
			),
			'wikicreator' => array(
				'createwiki' => true,
				'managewiki' => true,
			),
		),
		'+plazmaburstwiki' => array(
			'sysop' => array(
				'commentadmin' => true,
			),
		),
		'+poserdazfreebieswiki' => array(
			'autoconfirmed' => array(
				'edit' => true,
				'createpage' => true,
			),
			'confirmed' => array(
				'edit' => true,
				'createpage' => true,
			),
		),
		'+pso2wiki' => array(
 			'sysop' => array(
 				'unreviewedpages' => true,
 			),
 		),
		'+quantumwiki' => array(
			'Founder' => array(
				'read' => true,
			),
		),
		'+studynotekrwiki' => array(
			'voter' => array(
				'rollback' => true,
				'editsemiprotected' => true,
				'patrol' => true,
				'skipcpatcha' => true,
				'voter' => true,
			),
			'sysop' => array(
				'commentadmin' => true,
			),
		),
		'+spiralwiki' => array(
			'sysop' => array(
				'pagelang' => true,
			),
		),
		'+takethatwikiwiki' => array(
			'sysop' => array(
				'commentadmin' => true,
			),
		),
		'+testwiki' => array(
			'bureaucrat' => array(
				'bureaucrat' => true,
				'nuke' => true,
				'editinterface' => true,
			),
			'consul' => array(
				'read' => true,
				'bureaucrat' => true,
				'consul' => true,
				'editinterface' => true,
			),
			'testgroup' => array(
				'read' => true,
			),
		),
		'+trexwiki' => array(
			'co' => array(
				'co' => true,
				'ceo' => true,
				'reviewer' => true,
				'protect' => true,
			),
			'ceo' => array(
				'ceo' => true,
				'blockemail' => true,
				'block' => true,
				'ipblock-exempt' => true,
				'proxyunbannable' => true,
				'protect' => true,
				'managechangetags' => true,
				'createaccount' => true,
				'flow-delete' => true,
				'deletelogentry' => true,
				'deleterevision' => true,
				'delete' => true,
				'globalblock-whitelist' => true,
				'flow-edit-post' => true,
				'editusercss' => true,
				'edituserjs' => true,
				'editprotected' => true,
				'editsemiprotected' => true,
				'editinterface' => true,
				'autopatrol' => true,
				'importupload' => true,
				'import' => true,
				'flow-lock' => true,
				'patrol' => true,
				'markbotedits' => true,
				'nuke' => true,
				'mergehistory' => true,
				'abusefilter-modify' => true,
				'abusefilter-modify-restricted' => true,
				'move-categorypages' => true,
				'movefile' => true,
				'move' => true,
				'move-subpages' => true,
				'move-rootuserpages' => true,
				'autoconfirmed' => true,
				'noratelimit' => true,
				'suppressredirect' => true,
				'reupload-shared' => true,
				'override-antispoof' => true,
				'tboverride' => true,
				'reupload' => true,
				'skipcaptcha' => true,
				'rollback' => true,
				'abusefilter-revert' => true,
				'browsearchive' => true,
				'massmessage' => true,
				'unblockself' => true,
				'undelete' => true,
				'upload' => true,
				'apihighlimits' => true,
				'mf-uploadbutton' => true,
				'unwatchedpages' => true,
				'deletedhistory' => true,
				'deletedtext' => true,
				'spamblacklistlog' => true,
				'titleblacklistlog' => true,
				'validate' => true,
				'autoreview' => true,
				'autochecked users' => true,
				'editors' => true,
			),
			'bureaucrat' => array(
				'bureaucrat' => true,
				'nuke' => true,
				'movefile' => true,
				'blockemail' => true,
			),
			'sysmag' => array(
				'autoreview' => true,
				'autoconfirmed' => true,
				'autopatrolled' => true,
				'editinterface' => true,
			),
		),
		'+vrgowiki' => array(
			'Teachers' => array(
				'edit' => true,
			),
		),
		'+walthamstowlabourwiki' => array(
			'editor-approver' => array(
				'edit' => true,
			),
		),
		'+wikicanadawiki' => array(
			'founder' => array(
				'read' => true,
			),
			'moderator' => array(
				'deletelogentry' => true,
				'deleterevision' => true,
				'undelete' => true,
				'deletedhistory' => true,
				'deletedtext' => true,
				'deleted' => true,
				'block' => true,
				'protect' => true,
				'ediprotected' => true,
				'unblockself' => true,
				'blockemail' => true,
				'autopatrolled' => true,
				'supressredirect' => true,
			),
			'sysop' => array(
				'protectsite' => true,
				'changetags' => true,
				'managechangetags' => true,
				'applychangetags' => true,
			),
			'tagmanager' => array(
				'changetags' => true,
				'applychangetags' => true,
				'managechangetags' => true,
			),
		
		),
		'+wikipucwiki' => array(
			'*' => array(
				'ajaxpoll-vote' => true,
				'ajaxpoll-view-results' => true,
				'voteny' => true,
			),
		),
	),
	'wgGroupsRemoveFromSelf' => array(
		'default' => array(),
	),
	'wgRemoveGroups' => array(
		'default' => array(
			'bureaucrat' => array(
				'bot',
				'sysop',
			),
			'sysop' => array(
				'autopatrolled',
				'confirmed',
				'rollbacker',
			),
		),
		'+allthetropeswiki' => array(
			'sysop' => array(
				'commentadmin',
			),
		),
		'+applebranchwiki' => array(
			'sysop' => array(
				'commentadmin',
				'staff',
				'reviewer',
			),
		),
		'+applewikiwiki' => array(
			'sysop' => array(
				'commentadmin',
				'staff',
				'reviewer',
			),
		),
		'+cssandjsschoolboardwiki' => array(
			'Founder' => array(
				'autopatrolled',
				'bot',
				'bureaucrat',
				'confirmed',
				'sysop',
				'rollbacker',
			),
		),
		'+developmentwiki' => array(
			'supervisor' => array(
				'bureaucrat',
				'sysop',
				'trusted',
				'interfaceeditor'
			),
			'wikifounder' => array(
				'supervisor',
				'bureaucrat',
				'sysop',
				'trusted',
				'interfaceeditor'
			),
		),
		'+dpwiki' => array(
			'bureaucrat' => array(
				'respected',
			),
		),
		'+jayuwikiwiki' => array(
			'bureaucrat' => array(
				'voter',
			),
			'sysop' => array(
				'commentadmin',
			),
		),
		'+quantumwiki' => array(
			'Founder' => array(
				'autopatrolled',
				'bot',
				'bureaucrat',
				'confirmed',
				'sysop',
				'rollbacker',
			),
		),
		'+testwiki' => array(
			'bureaucrat' => array(
				'testgroup',
				'bot',
			),
			'consul' => array(
				'bot',
				'bureaucrat',
				'exampleuser',
			),
			'steward' => array(
				'consul',
				'exampleuser',
			),
		),
		'+trexwiki' => array(
			'co' => array(
				'ceo',
			),
			'ceo' => array(
				'autopatrolled',
				'bot',
				'bureaucrat',
				'confirmed',
				'sysop',
				'rollbacker',
				'sysmag',
				'editors',
				'reviewer',
				'autochecked users',
			),
			'bureaucrat' => array(
				'sysmag',
			),
		),
		'studynotekrwiki' => array(
			'sysop' => array(
				'voter'
			),
			'bureaucrat' => array(
				'sysop',
				'voter',
				'bot',
				'autopatrolled',
			),
		),
		'+vrgowiki' => array(
			'bureaucrat' => array(
				'Teachers',
			),
		),
		'+walthamstowlabourwiki' => array(
			'sysop' => array(
				'editor-approver',
				'editor',
			),
			'editor-approver' => array(
				'editor',
			),
		),
		'+wikidolphinhansenwiki' => array(
			'sysop' => array(
				'commentadmin',
			),
		),
		'+wikicanadawiki' => array(
			'founder' => array(
				'bureaucrat',
				'banned',
				'founder',
			),
			'moderator' => array(
				'autopatrolled',
				'confirmed',
			),
			'sysop' => array(
				'moderator',
				'tagmanager',
			),
			'bureaucrat' => array(
				'moderator',
				'confirmed',
				'autopatrolled',
				'rollback',
				'bot',
			),
		),
	),
	'wgRevokePermissions' => array(
		'default' => array(),
		'loginwiki' => array(
			'*' => array(
				'edit' => true,
			),
		),
		'testwiki' => array(
			'sysop' => array(
				# 'nuke' => true, // done in overrides at end of file
				# 'editinterface' => true, //mistakenly applies to other groups as well
			),
			'exampleuser' => array(
				'editmyoptions' => true,
			),
		),
		'wikicanadawiki' => array(
 			'banned' => array(
 				'read' => true,
				'edit' => true,
 			),
			
 		),
	),

	// Piwik settings
	'wmgPiwikSiteID' => array(
		'default' => '1',
		'allthetropeswiki' => '2',
	),

	// RelatedArticles settings
	'wgRelatedArticlesLoggingSamplingRate' => array(
	 	'default' => false,
	 	'allthetropeswiki' => '0.01',
	 	'extloadwiki' => '0.01',
	 	'youtubewiki' => '0.01',
	 ),
	 'wgRelatedArticlesShowReadMore' => array(
	 	'default' => false,
	 	'allthetropeswiki' => true,
	 	'extloadwiki' => true,
	 	'youtubewiki' => true,
	 ),
	 'wgRelatedArticlesShowInFooter' => array(
	 	'default' => false,
	 	'allthetropeswiki' => true,
	 	'extloadwiki' => true,
	 	'youtubewiki' => true,
	 ),
	 
	// Restriction types
	'+wgRestrictionLevels' => array(
		'default' => array(
			'user',
		),
		'+dpwiki' => array(
			'bureaucrat',
			'respected',
		),
		'+testwiki' => array(
			'bureaucrat',
			'consul',
		),
		'+developmentwiki' => array(
			'bureaucrat',
			'supervisor',
			'wikifounder',
		),
		'+studynotekrwiki' => array(
			'voter',
		),
		'+trexwiki' => array(
			'sysmag',
			'bureaucrat',
			'ceo',
			'co',
		),
	),
		
	'+wgRestrictionTypes' => array(
		'default' => array(
			'delete',
		),
	),
	
	// RSS Settings
	'wgRSSCacheAge' => array(
		'default' => '3600'
	),
	'wgRSSProxy' => array(
		'default' => false,
	),
	'wgRSSDateDefaultFormat' => array(
		'default' => 'Y-m-d H:i:s'
	),

	// Scribunto
	'wgCodeEditorEnableCore' => array(
		'default' => true,
	),
	'wgScribuntoUseCodeEditor' => array(
		'default' => true,
	),

	// Server
	'wgArticlePath' => array(
		'default' => '/wiki/$1',
	),
	'wgDisableOutputCompression' => array(
		'default' => true,
	),
	'wgScriptExtension' => array(
		'default' => '.php',
	),
	'wgScriptPath' => array(
		'default' => '/w',
	),
	'wgServer' => array(
		'default' => 'https://$lang.miraheze.org',
		'aenasanwiki' => 'https://wiki.aenasan.com',
		'allthetropeswiki' => 'https://allthetropes.org',
		'alwikiwiki' => 'https://alwiki.net',
		'amaninfowiki' => 'https://aman.info.tm',
		'antiguabarbudacalypsowiki' => 'https://antiguabarbudacalypso.com',
		'applewikiwiki' => 'https://applewiki.tk',
		'boulderwikiwiki' => 'https://boulderwiki.org',
		'carvingwiki' => 'https://carving.wiki',
		'dottorcontewiki' => 'https://wiki.dottorconte.eu',
		'drones4allwiki' => 'https://wiki.drones4nature.info',
		'dwplivewiki' => 'https://wiki.dwplive.com',
		'espiralwiki' => 'https://espiral.org',
		'evelopediawiki' => 'https://evelopedia.tk',
		'fibromyalgiaengineerwiki' => 'https://fibromyalgia-engineer.com',
		'forfunssakewiki' => 'https://wiki.forfunssake.co.uk',
		'garyjohnsonmeetupswiki' => 'https://wiki.garyjohnsonmeetups.com',
		'grottocenterwiki' => 'https://wiki.grottocenter.org',
		'haxionspacewiki' => 'https://haxion.space',
		'ircwiki' => 'https://ircwiki.cf',
		'labbywiki' => 'https://wiki.labby.io',
		'make717wiki' => 'https://wiki.make717.org',
		'meeusenwiki' => 'https://wiki.meeusen.net',
		'metatrekwiki' => 'https://meta.trek.tk',
		'nextlevelwikiwiki' => 'https://wiki.lbcomms.co.za',
		'oneagencydunedinwiki' => 'https://oneagencydunedin.wiki',
		'openonderwijswiki' => 'https://www.openonderwijs.org',
		'oyeavdelingenwiki' => 'https://oyeavdelingen.org',
		'permanentfuturelabwiki' => 'https://permanentfuturelab.wiki',
		'testwiki' => 'https://publictestwiki.com',
		'reviwiki' => 'https://private.revi.wiki',
		'rpgbrigadewiki' => 'https://wiki.rpgbrigade.org',
		'spiralwiki' => 'https://spiral.wiki',
		'takethatwikiwiki' => 'https://takethatwiki.com',
		'thelonsdalebattalionwiki' => 'https://thelonsdalebattalion.co.uk',
		'thinkingliquidwiki' => 'https://thinkingliquid.org',
		'universebuildwiki' => 'https://universebuild.com',
		'valentinaprojectwiki' => 'https://wiki.valentinaproject.org',
		'wikikaisagawiki' => 'https://wiki.kaisaga.com',
		'wikiparkinsonwiki' => 'https://wikiparkinson.org',
		'wisdomwikiwiki' => 'https://wisdomwiki.org',
		'wisdomsandboxwiki' => 'https://sandbox.wisdomwiki.org',
		'zenbuddhismwiki' => 'https://www.zenbuddhism.info',
	),
	'wgShowHostnames' => array(
		'default' => true,
	),
	'wgUsePathInfo' => array(
		'default' => true,
	),

	// SiteMatrix
	'wgSiteMatrixPrivateSites' => array(
		'default' => "/srv/mediawiki/dblist/private.dblist",
	),
	'wgSiteMatrixClosedSites' => array(
		'default' => "/srv/mediawiki/dblist/closed.dblist",
	),
	'wgSiteMatrixSites' => array(
		'default' => array(),
	),
	
	// Statistics
	'wgArticleCountMethod' => array(
		'default' => 'link', // To update it, you will need to run the maintenance/updateArticleCount.php script
		'throisarwiki' => 'any',
	),
	
	// Squid (aka Varnish)
	'wgUseSquid' => array(
		'default' => true,
	),
	'wgSquidServers' => array(
		'default' => array( '81.4.124.61:81', '107.191.126.23:81' ),
	),
	
	// Style
	'wgAllowUserCss' => array(
		'default' => true,
	),
	'wgAllowUserJs' => array(
		'default' => true,
	),
	'wgAppleTouchIcon' => array(
		'default' => '/apple-touch-icon.png',
		'applewikiwiki' => "//$wmgUploadHostname/applewikiwiki/8/89/Facveicon.ICO",
		'applebranchwiki' => "//$wmgUploadHostname/applebranchwiki/e/ee/AppleBranch_Icon.png",
	),
	'wgCentralAuthLoginIcon' => array(
		'default' => '/usr/share/nginx/favicons/default.ico',
	),
	'wgDefaultSkin' => array(
		'default' => 'vector',
	        '3dicwiki' => 'foreground',
		'applebranchwiki' => 'refreshed',
		'applewikiwiki' => 'refreshed',
		'bdorpwiki' => 'erudite',
		'cybercrimewiki' => 'modern',
		'datachronwiki' => 'erudite',
		'dtswiki' => 'metrolook',
		'godaigowiki' => 'monobook',
		'ofthevampirewiki' => 'dusktodawn',
		'ontariobrasswiki' => 'monobook',
		'permanentfuturelabwiki' => 'foreground',
		'thelonsdalebattalionwiki' => 'metrolook',
	),
	'wgFavicon' => array(
		'default' => '/favicon.ico',
		'8stationwiki' => "//$wmgUploadHostname/8stationwiki/6/64/Favicon.ico",
		'adiapediawiki' => "//$wmgUploadHostname/adiapediawiki/b/be/APfavicon.png",
		'adiaprojectwiki' => "//$wmgUploadHostname/adiaprojectwiki/9/91/Adiafavicon.png",
		'aktposwiki' => "//$wmgUploadHostname/aktposwiki/8/84/Rainbowstar.png",
		'allbanks2wiki' => "//$wmgUploadHostname/allbanks2wiki/7/7f/AllBanks2Logo.png",
		'aenasanwiki' => "//$wmgUploadHostname/aenasanwiki/e/e6/AEfav.ico",
		'alwikiwiki' => "//$wmgUploadHostname/alwikiwiki/5/59/ALWikiFavicon.ico",
		'amaninfowiki' => "//$wmgUploadHostname/amaninfowiki/6/64/Favicon.ico",
		'anothertimeline2120wiki' => "//$wmgUploadHostname/anothertimeline2120wiki/6/64/Favicon.ico",
		'applewikiwiki' => "//$wmgUploadHostname/applewikiwiki/8/89/Facveicon.ICO",
		'applebranchwiki' => "//$wmgUploadHostname/applebranchwiki/e/ee/AppleBranch_Icon.png",
		'astrowiki' => "//$wmgUploadHostname/astrowiki/6/64/Favicon.ico",
		'bdorpwiki' => "//$wmgUploadHostname/bdorpwiki/3/3b/Favicongif.gif",
		'betapurplewiki' => "//$wmgUploadHostname/betapurplewiki/6/64/Favicon.ico",
		'bgowiki' => "//$wmgUploadHostname/bgowiki/6/64/Favicon.ico",
		'bzdetopediawiki' => "//$wmgUploadHostname/bzdetopediawiki/6/64/Favicon.ico",
		'carvingwiki' => "//$wmgUploadHostname/carvingwiki/6/64/Favicon.ico",
		'christipediawiki' => "//$wmgUploadHostname/christipediawiki/e/e7/Logo_Christipedia.jpg",
		'clementsworldbuildingwiki' => "//$wmgUploadHostname/clementsworldbuildingwiki/8/8b/CW_favicon.ico",
		'cnvwiki' => "//$wmgUploadHostname/cnvwiki/6/64/Favicon.ico",
		'compilerdevwiki' => "//$wmgUploadHostname/compilerdevwiki/c/c9/Logo.png",
		'crankipediawiki' => "//$wmgUploadHostname/crankipediawiki/4/4c/Crankilogo.png",
		'cssandjsschoolboardwiki' => '//upload.wikimedia.org/wikipedia/commons/2/2b/Page_css_48.png',
		'datachronwiki' => "//$wmgUploadHostname/datachronwiki/f/f3/1408002974_WS.png",
		'diavwiki' => "//$wmgUploadHostname/diavwiki/6/64/Favicon.ico",
		'dditecwiki' => "//$wmgUploadHostname/dditecwiki/8/87/Ddu_logo.png",
		'doinwiki' => "//$wmgUploadHostname/doinwiki/6/64/Favicon.ico",
		'drones4allwiki' => "//$wmgUploadHostname/drones4allwiki/2/26/Favicon.png",
		'dwplivewiki' => "//$wmgUploadHostname/dwplivewiki/6/64/Favicon.ico",
		'emulationwiki' => "//$wmgUploadHostname/emulationwiki/6/60/Wiki_favicon.png",
		'eternalconfictwiki' => "//$wmgUploadHostname/eternalconfictwiki/a/a9/AD_new_logo4.png",
		'etpowiki' => "//$wmgUploadHostname/etpowiki/1/1f/FaviconETPO.gif",
		'evawiki' => "//$wmgUploadHostname/evawiki/6/64/Favicon.ico",
		'evelopediawiki' => "//$wmgUploadHostname/evelopediawiki/6/64/Favicon.ico",
		'fbwikiwiki' => "//$wmgUploadHostname/fbwikiwiki/4/4c/Fbwiki_favicon.ico",
		'fmbvwiki' => "//$wmgUploadHostname/fmbvwiki/0/06/Fmbvfavicon.png",
		'forexwiki' => "//$wmgUploadHostname/forexwiki/6/64/Favicon.ico",
		'freecollegeprojectwiki' => "//$wmgUploadHostname/freecollegeprojectwiki/1/18/FreeCollegeProject.ico",
		'genwiki' => "//$wmgUploadHostname/genwiki/6/64/Favicon.ico",
		'geodatawiki' => "//$wmgUploadHostname/geodatawiki/6/64/Favicon.ico",
		'grottocenterwiki' => "//$wmgUploadHostname/grottocenterwiki/6/64/Favicon.ico",
		'imperiuswiki' => "//$wmgUploadHostname/imperiuswiki/b/b2/ImperiusFavicon.ico",
		'izanagiwiki' => "//$wmgUploadHostname/izanagiwiki/3/35/Favicon_%282%29.ico",
		'karniarutheniawiki' => "//$wmgUploadHostname/karniarutheniawiki/1/17/Krlogo.png",
		'lexiquewiki' => "//$wmgUploadHostname/lexiquewiki/0/0f/Lexique_favicon.ico",
		'luckandlogicwiki' => "//$wmgUploadHostname/luckandlogicwiki/2/26/Favicon.png",
		'linuxwiki' => "//$wmgUploadHostname/linuxwiki/f/f2/Linuxwikilogo.png",
		'natenwiki' => "//$wmgUploadHostname/natenwiki/c/c9/Logo.png",
		'newcolumbiawiki' => "//$wmgUploadHostname/newcolumbiawiki/5/5b/Wiki-favicon.png",
		'thoughtonomywikiwiki' => "//$wmgUploadHostname/thoughtonomywikiwiki/2/26/Favicon.png",
		'oneagencydunedinwiki' => "//$wmgUploadHostname/oneagencydunedinwiki/d/de/OneAgency_Favicon.png",
		'openonderwijswiki' => "//$wmgUploadHostname/openonderwijswiki/c/ca/Ooo_logo_square_favicon.svg",
		'ontariobrasswiki' => "//$wmgUploadHostname/ontariobrasswiki/0/09/Ontariobrass.png",
		'openconstitutionwiki' => "//$wmgUploadHostname/openconstitutionwiki/e/e3/OpnConst_favicon.png",
		'openkorebrasilwikiwiki' => "//$wmgUploadHostname/openkorebrasilwikiwiki/3/35/WikiLogo.png",
	        'paranormalwiki' => "//$wmgUploadHostname/paranormalwiki/2/2d/PW.ico",
		'partupwiki' => "//$wmgUploadHostname/partupwiki/6/64/Favicon.ico",
		'permanentfuturelabwiki' => "//$wmgUploadHostname/permanentfuturelabwiki/6/64/Favicon.ico",
		'plasmawiki' => "//$wmgUploadHostname/plasmawiki/e/e3/PlasmaWiki_Favicon.ico",
		'pluspiwiki' => "//$wmgUploadHostname/pluspiwiki/6/64/Favicon.ico",
		'rpgbrigadewiki' => "//$wmgUploadHostname/rpgbrigadewiki/6/64/Favicon.ico",
		'safiriawiki' => "//$wmgUploadHostname/safiriawiki/f/fc/Safiria_wiki_favicon.png",
		'saliorpediawiki' => "//$wmgUploadHostname/saliorpediawiki/a/ac/Favicon-1.png",
		'savagewikiwiki' => "//$wmgUploadHostname/savagewikiwiki/6/64/Favicon.ico",
		'sfrepresentuswiki' => "//$wmgUploadHostname/sfrepresentuswiki/5/5c/Favicon_logo.png",
		'shadawiki' => "//$wmgUploadHostname/shadawiki/c/c4/SHA_Favicon.svg",
		'sirikotwiki' => '//sirikot.com/favicon.png',
		'snowthegamewiki' => "//$wmgUploadHostname/snowthegamewiki/8/89/SNOW_logo_wiki.png",
		'sqlserverwiki' => "//$wmgUploadHostname/sqlserverwiki/6/64/Favicon.ico",
		'starsetonlinewiki' => "//$wmgUploadHostname/starsetonlinewiki/9/93/Wiki_favicon.ico",
		'stellachronicawiki' => "//$wmgUploadHostname/stellachronicawiki/9/93/Scwiki-favicon.png",
		'stoutofreachwiki' => "//$wmgUploadHostname/stoutofreachwiki/6/64/Favicon.ico",
		'takethatwikiwiki' => "//$wmgUploadHostname/takethatwikiwiki/6/64/Favicon.ico",
		'tmewiki' => "//$wmgUploadHostname/tmewiki/6/64/Favicon.ico",
		'teleswikiwiki' => "//$wmgUploadHostname/teleswikiwiki/7/7f/Teleslogosmoler.png",
		'thecscwiki' => "//$wmgUploadHostname/thecscwiki/0/0d/Csc_favicon.png",
		'thelonsdalebattalionwiki' => "//$wmgUploadHostname/thelonsdalebattalionwiki/2/21/SoldiersFavicon.png",
		'themfbclubwiki' => "//$wmgUploadHostname/themfbclubwiki/6/64/Favicon.ico",
		'titreprovisoirewiki' => "//$wmgUploadHostname/titreprovisoirewiki/0/01/Favicon_titrepro.png",
		'ubuntuwiki' => "//$wmgUploadHostname/ubuntuwiki/1/11/UbuntuWiki.png",
		'universebuildwiki' => "//$wmgUploadHostname/universebuildwiki/f/fd/UniversebuildFavicon.png",
		'valentinaprojectwiki' => "//$wmgUploadHostname/valentinaprojectwiki/1/1d/Valentina_logo_favicon.png",
		'wdbwiki' => "//$wmgUploadHostname/wdbwiki/2/26/Dancing-135px.png",
		'welcomewikiwiki' => "//$wmgUploadHostname/welcomewikiwiki/6/69/20150913_WelcomeWiki-Logo_Favicon32x32.png",
		'webflowwiki' => "//$wmgUploadHostname/webflowwiki/6/64/Favicon.ico",
		'wikibookswiki' => "//$wmgUploadHostname/wikibookswiki/6/60/Wiki_favicon.png",
		'wikicervanteswiki' => "//$wmgUploadHostname/wikicervanteswiki/0/08/FaviconCervantes.ico",
		'wikidolphinhansenwiki' => "//$wmgUploadHostname/wikidolphinhansenwiki/b/bf/Dolphin-icon-150.png",
		'wikipucwiki' => "//$wmgUploadHostname/wikipucwiki/2/26/Favicon.png",
		'wisdomwikiwiki' => "//$wmgUploadHostname/wisdomwikiwiki/6/64/Favicon.ico",
		'wisdomsandboxwiki' => "//$wmgUploadHostname/wisdomsandboxwiki/6/64/Favicon.ico",
	),
	'wgLogo' => array(
		'default' => "//$wmgUploadHostname/metawiki/3/35/Miraheze_Logo.svg",
		'8stationwiki' => "//$wmgUploadHostname/8stationwiki/3/3b/Wiki_logo.png",
		'aacenterpriselearningwiki' => "//$wmgUploadHostname/aacenterpriselearningwiki/c/c6/AACLogo.jpg",
		'adiapediawiki' => "//$wmgUploadHostname/adiapediawiki/f/f1/APlogo.png",
		'adiaprojectwiki' => "//$wmgUploadHostname/adiaprojectwiki/8/8b/Adialogo.png",
		'adnovumwiki' => "//$wmgUploadHostname/adnovumwiki/f/fa/AdnovumRPtemplogo.png",
		'aenasanwiki' => "//$wmgUploadHostname/aenasanwiki/f/f1/AEicon1.png",
		'airwiki' => "//$wmgUploadHostname/airwiki/8/8e/Logo-scadta-133x133.gif",
		'aktposwiki' => "//$wmgUploadHostname/aktposwiki/3/33/Logo-amafuwa.png",
		'aleenghawiki' => "//$wmgUploadHostname/aleenghawiki/c/c7/Aleen-gha_d20_Logo.jpg",
		'algopediawiki' => "//$wmgUploadHostname/algopediawiki/8/88/Algopedia-logo135px.png",
		'allbanks2wiki' => "//$wmgUploadHostname/allbanks2wiki/7/7f/AllBanks2Logo.png",
		'allthetropeswiki' => "//$wmgUploadHostname/allthetropeswiki/8/86/Logo-Square-v1-1x.png",
		'alwikiwiki' => "//$wmgUploadHostname/alwikiwiki/3/35/WikiLogo.png",
		'amaninfowiki' => "//$wmgUploadHostname/amaninfowiki/c/c9/Logo.png",
		'anothertimeline2120wiki' => "//$wmgUploadHostname/anothertimeline2120wiki/3/3b/Wiki_logo.png",
		'applebranchwiki' => "//$wmgUploadHostname/applebranchwiki/0/03/AppleBranch_135.png",
		'applewikiwiki' => "//$wmgUploadHostname/applewikiwiki/c/c9/AppleWikilogo.PNG",
		'astrowiki' => "//$wmgUploadHostname/astrowiki/6/6c/Astromagicka_logo.png",
		'anuwiki' => "//$wmgUploadHostname/anuwiki/8/8e/Anuwikilogo.png",
		'avionwiki' => "//$wmgUploadHostname/avionwiki/3/31/Argis_Wiki_Logo.png",
		'ayrshirewiki' => "//$wmgUploadHostname/ayrshirewiki/b/bc/Wiki.png",
		'bakufuwiki' => "//$wmgUploadHostname/bakufuwiki/b/bc/Wiki.png",
		'ballaratpubswiki' => "//$wmgUploadHostname/ballaratpubswiki/4/42/Hotels_of_Ballarat_logo.jpg",
		'bdorpwiki' => "//$wmgUploadHostname/bdorpwiki/2/22/Main_page.PNG",
		'beatstationwiki' => "//$wmgUploadHostname/beatstationwiki/d/da/Wiki_logo2.png",
		'betapurplewiki' => "//$wmgUploadHostname/betapurplewiki/0/0e/BetaPurpleLogo.png",
		'biblicalwikiwiki' => "//$wmgUploadHostname/biblicalwikiwiki/e/e2/WikiLogo.svg",
		'burnoutwiki' => "//$wmgUploadHostname/burnoutwiki/0/0b/BURNOUTWIKI_LOGO_135px.png",
		'bzdetopediawiki' => "//$wmgUploadHostname/bzdetopediawiki/b/bc/Wiki.png",
		'carvingwiki' => "//$wmgUploadHostname/carvingwiki/5/59/Snowflake135.png",
		'centriswiki' => "//$wmgUploadHostname/centriswiki/8/86/Logo_da_Wiki_-_simples.png",
		'christipediawiki' => "//$wmgUploadHostname/christipediawiki/e/e7/Logo_Christipedia.jpg",
		'chromiumrosewiki' => "//$wmgUploadHostname/chromiumrosewiki/b/ba/ChromiumRose135x135.png",
		'clementsworldbuildingwiki' => "//$wmgUploadHostname/clementsworldbuildingwiki/3/39/Cw_logo.png",
		'cnvwiki' => "//$wmgUploadHostname/cnvwiki/b/bc/Wiki.png",
		'collabvmwiki' => "//$wmgUploadHostname/collabvmwiki/c/c9/Logo.png",
		'compilerdevwiki' => "//$wmgUploadHostname/compilerdevwiki/c/c9/Logo.png",
		'conuconwiki' => "//phabricator.miraheze.org/file/data/o6plmtjp4afd6vvxcx2m/PHID-FILE-fzbuutpmykupn5jz256h/CONUCON_small_face.png",
		'cpiwiki' => "//$wmgUploadHostname/cpiwiki/0/01/CPI_Alpha_DS_2_160px.png",
		'cssandjsschoolboardwiki' => "//upload.wikimedia.org/wikipedia/commons/c/c7/Css.png",
		'crankipediawiki' => "//$wmgUploadHostname/crankipediawiki/4/4c/Crankilogo.png",
		'cvmlabwiki' => "//$wmgUploadHostname/cvmlabwiki/3/3b/Wiki_logo.png",
		'czechpolicywiki' => "//$wmgUploadHostname/czechpolicywiki/2/20/Plain_logo.png", 
		'datachronwiki' => "//$wmgUploadHostname/datachronwiki/f/f3/1408002974_WS.png",
		'dditecwiki' => "//$wmgUploadHostname/dditecwiki/8/87/Ddu_logo.png",
		'decisorwiki' => "//$wmgUploadHostname/decisorwiki/8/87/DECISOR135x135.png",
		'dicficwiki' => "//$wmgUploadHostname/dicficwiki/b/b1/Dicfic-logo.png",
		'diggywikipolskawiki' => "//$wmgUploadHostname/diggywikipolskawiki/8/81/Logodiggy.png",
		'doinwiki' => "//$wmgUploadHostname/doinwiki/6/60/Wiki_Logo.png",
		'drones4allwiki' => "//$wmgUploadHostname/drones4allwiki/6/60/Wiki_Logo.png",
		'dsiguidewiki' => "//$wmgUploadHostname/dsiguidewiki/1/13/Wikilogod.jpg",
		'dwplivewiki' => "//$wmgUploadHostname/dwplivewiki/c/c0/Logo_135.png",
		'emulationwiki' => "//$wmgUploadHostname/emulationwiki/3/3b/Wiki_logo.png",
		'eotewiki' => "//$wmgUploadHostname/eotewiki/6/64/Logo_triumph.png",
		'espiralwiki' => '//upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Spiral_project_logo.svg/135px-Spiral_project_logo.svg.png',
		'eternalconfictwiki' => "//$wmgUploadHostname/eternalconfictwiki/a/a9/AD_new_logo4.png",
		'etpowiki' => "//$wmgUploadHostname/etpowiki/1/1f/LogoETPO.gif",
		'evawiki' => "//$wmgUploadHostname/evawiki/e/ec/EVA-Wiki.png",
		'fbwikiwiki' => "//$wmgUploadHostname/fbwikiwiki/thumb/4/4a/Fbwiki_logo.png/135px-Fbwiki_logo.png",
		'fieldresearchwiki' => "//$wmgUploadHostname/fieldresearchwiki/d/d1/Logo_c.jpg",
		'fifamwiki' => "//$wmgUploadHostname/fifamwiki/0/0c/Wikilogo_160px.png",
		'fishpercolatorwiki' => "//$wmgUploadHostname/fishpercolatorwiki/d/d2/FPLogo.png",
		'fmbvwiki' => "//$wmgUploadHostname/fmbvwiki/3/33/Fmbvlogo.png",
		'frontdeskswiki' => "//$wmgUploadHostname/frontdeskswiki/b/b3/Fdawikilogo.png",
		'foodsharinghamburgwiki' => "//$wmgUploadHostname/foodsharinghamburgwiki/d/d2/FoodsharingHamburgLogo135px.jpg",
		'forexwiki' => "//$wmgUploadHostname/forexwiki/c/c9/Logo.png",
		'freecollegeprojectwiki' => "//$wmgUploadHostname/freecollegeprojectwiki/6/60/FC_Logo_135p.png",
		'fusiongpwiki' => "//$wmgUploadHostname/fusiongpwiki/f/f2/Fusion_Ball.png",
		'genwiki' => "//$wmgUploadHostname/genwiki/0/03/Genesis-logo-reized.png",
		'geodatawiki' => "//$wmgUploadHostname/geodatawiki/c/c1/GlobeIcon160.png",
		'grottocenterwiki' => "//$wmgUploadHostname/grottocenterwiki/a/ac/Logo_grottocenter.png",
		'hshsinfoportalwiki' => "//$wmgUploadHostname/hshsinfoportalwiki/e/ec/HSHS_Logo.jpeg",
		'hsoodenwiki' => "//$wmgUploadHostname/hsoodenwiki/8/82/135px-wiki-logo-blank.png",
		'hydrawikiwiki' => "//$wmgUploadHostname/hydrawikiwiki/7/79/Hydra-logo.png",
		'jayuwikiwiki' => "//$wmgUploadHostname/jayuwikiwiki/d/d7/Jayuwiki3.png",
		'jokowiki' => "//$wmgUploadHostname/jokowiki/0/0d/Icon_Joko.png",
		'karniarutheniawiki' => "//$wmgUploadHostname/karniarutheniawiki/1/17/Krlogo.png",
		'lbsgeswiki' => "//$wmgUploadHostname/lbsgeswiki/0/05/WikiLogo.jpg",
		'lunfengwiki' => "//$wmgUploadHostname/lunfengwiki/b/bc/Wiki.png",
		'idleomenswiki' => "//$wmgUploadHostname/idleomenswiki/9/9e/IdleOmens-Logo.png",
		'imperiuswiki' => "//$wmgUploadHostname/imperiuswiki/9/94/ImperiusLogo.png",
		'islamwissenschaftwiki' => "//$wmgUploadHostname/islamwissenschaftwiki/b/bc/Wiki.png",
		'izanagiwiki' => "//$wmgUploadHostname/izanagiwiki/e/eb/IZLogo.png",
		'lexiquewiki' =>  "//$wmgUploadHostname/lexiquewiki/6/6d/LibraryLexique-smallRes.png",
		'linuxwiki' => "//$wmgUploadHostname/linuxwiki/f/f2/Linuxwikilogo.png",
		'luckandlogicwiki' => "//$wmgUploadHostname/luckandlogicwiki/2/26/Favicon.png",
		'madgendersciencewiki' => "//$wmgUploadHostname/madgendersciencewiki/1/1f/Mgs_logo.jpg",
		'mafiawiki' => "//$wmgUploadHostname/mafiawiki/a/a6/Header.png",
		'make717wiki' => "//$wmgUploadHostname/make717wiki/thumb/f/fc/Make717_Logo.png/150px-Make717_Logo.png",
		'maiasongcontestwiki' => "//$wmgUploadHostname/maiasongcontestwiki/b/bc/Sitelogo.png",
		'makeiteasyautoswiki' => "//$wmgUploadHostname/makeiteasyautoswiki/0/01/Miea.png",
		'mcwiki' => "//$wmgUploadHostname/mcwiki/b/bc/Wiki.png",
		'mindgearwiki' => "//$wmgUploadHostname/mindgearwiki/3/36/Mind_Gear.png",
		'miraewiki' => "//$wmgUploadHostname/miraewiki/2/22/LogoOfMirae.png",
		'moralecwiki' => "//$wmgUploadHostname/moralecwiki/e/e8/Moralec-pluto.png",
		'musicarchivewiki' => "//$wmgUploadHostname/musicarchivewiki/d/d4/Logo.jpg",
		'natenwiki' => "//$wmgUploadHostname/natenwiki/c/c9/Logo.png",
		'nemesiswiki' => "//$wmgUploadHostname/nemesiswiki/b/bc/Wiki.png",
		'newarkmanorwiki' => "//$wmgUploadHostname/newarkmanorwiki/8/89/Wiki_logo.jpg",
		'newcolumbiawiki' => "//$wmgUploadHostname/newcolumbiawiki/a/a0/Wiki-logo.png",
		'nanopediawiki' => "//$wmgUploadHostname/nanopediawiki/c/c9/Logo.png",
		'notezenwiki' => "//$wmgUploadHostname/notezenwiki/c/c9/Logo.png",
		'oneagencydunedinwiki' => "//$wmgUploadHostname/oneagencydunedinwiki/e/eb/OneAgency_WikiLogo_Black.png",
		'ontariobrasswiki' => "//$wmgUploadHostname/ontariobrasswiki/0/09/Ontariobrass.png",
		'openconstitutionwiki' => "//$wmgUploadHostname/openconstitutionwiki/4/40/LOGO.png",
		'openkorebrasilwikiwiki' => "//$wmgUploadHostname/openkorebrasilwikiwiki/3/35/WikiLogo.png",
		'oyeavdelingenwiki' => "//$wmgUploadHostname/oyeavdelingenwiki/7/7b/OUS_Logo.png",
		'oneironautwiki' => "//$wmgUploadHostname/oneironautwiki/7/7b/Oneironaut-Wiki-logo.png",
		'paranormalwiki' => "//$wmgUploadHostname/paranormalwiki/2/2d/Parawiki.png",
		'partupwiki' => "//$wmgUploadHostname/partupwiki/a/a6/Part-up-logo-150x150-mediawiki.png",
		'permanentfuturelabwiki' => "//$wmgUploadHostname/permanentfuturelabwiki/c/c0/Permanent-Future-Lab-logo-150x150-mediawiki.png",
		'philmont126wiki' => "//$wmgUploadHostname/philmont126wiki/f/f6/PhilmontLogo.jpg",
		'plasmawiki' => "//$wmgUploadHostname/plasmawiki/0/08/PlasmaWiki_Logo.svg",
		'plazmaburstwiki' => "//$wmgUploadHostname/plazmaburstwiki/6/6f/Plazmaburst-logo.png",
		'pluspiwiki' => "//$wmgUploadHostname/pluspiwiki/b/bd/Pluspi.png",
		'printmakingbewiki' => "//$wmgUploadHostname/printmakingbewiki/2/22/Pmk-logo-wiki-135px.png",
		'priyowiki' => "//$wmgUploadHostname/priyowiki/c/c9/Logo.png",
		'rebelalliancewiki' => "//$wmgUploadHostname/rebelalliancewiki/f/fe/Logo135.png",
		'reiaasuwiki' => "//$wmgUploadHostname/reiaasuwiki/1/1e/Reiaasu-wiki-logo-1.png",
		'rpgbrigadewiki' => "//$wmgUploadHostname/rpgbrigadewiki/c/c9/Logo.png",
		'safiriawiki' => "//$wmgUploadHostname/safiriawiki/2/24/Newcoa_small.png",
		'sapperpediawiki' => "//$wmgUploadHostname/sapperpediawiki/f/f8/Sapperpedia_small.png",
		'saliorpediawiki' => "//$wmgUploadHostname/saliorpediawiki/9/98/BirdRoc.png",
		'savagewikiwiki' => "//$wmgUploadHostname/savagewikiwiki/9/98/Sav_Wiki_logo.jpg",
		'sdeuropewiki' => "//$wmgUploadHostname/sdeuropewiki/d/d4/Logo.jpg",
		'sfrepresentuswiki' => "//$wmgUploadHostname/sfrepresentuswiki/4/41/RepUsLogo_small.png",
		'shadawiki' => "//$wmgUploadHostname/shadawiki/e/e3/SHA_Wiki_logo.svg",
		'sirikotwiki' => '//www.sirikot.com/wiki_logo.png',
		'sjuhabitatwiki' => "//$wmgUploadHostname/sjuhabitatwiki/7/7a/Habi_logo_wiki.png",
		'skyfireflyffwiki' => "//$wmgUploadHostname/skyfireflyffwiki/c/c9/Logo.png",
		'smfdoesathingwiki' => "//$wmgUploadHostname/smfdoesathingwiki/b/bc/Wiki.png",
		'snowthegamewiki' => "//$wmgUploadHostname/snowthegamewiki/8/89/SNOW_logo_wiki.png",
		'sqlserverwiki' => "//$wmgUploadHostname/sqlserverwiki/d/d4/Logo.jpg",
		'spiralwiki' => '//upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Spiral_project_logo.svg/135px-Spiral_project_logo.svg.png',
		'starsetonlinewiki' => "//$wmgUploadHostname/starsetonlinewiki/8/89/Wiki_logo.jpg",
		'stellachronicawiki' => "//$wmgUploadHostname/stellachronicawiki/d/d0/SCLogo2.png",
		'sterbalfamilyrecipeswiki' => "//$wmgUploadHostname/sterbalfamilyrecipeswiki/c/c4/Logo-135x135.jpg",
		'stormfmwiki' => "//$wmgUploadHostname/stormfmwiki/1/18/Stormlogo_small.png",
		'stoutofreachwiki' => "//$wmgUploadHostname/stoutofreachwiki/b/bc/Wiki.png",
		'studynotekrwiki' => "//$wmgUploadHostname/studynotekrwiki/b/b3/Imageedit_6_7597747851.gif",
		'takethatwikiwiki' => "//$wmgUploadHostname/takethatwikiwiki/e/e8/Take_That_Wiki_Logo_Small.png",
		'tmewiki' => "//$wmgUploadHostname/tmewiki/b/bc/Wiki.png",
		'teleswikiwiki' => "//$wmgUploadHostname/teleswikiwiki/b/b6/Teleslogo01.png",
		'terriblespacewiki' => "//$wmgUploadHostname/terriblespacewiki/e/eb/Terrible_space_logo.png",
		'testwiki' => "//$wmgUploadHostname/testwiki/9/99/NewLogo.png",
		'thecscwiki' => "//$wmgUploadHostname/thecscwiki/5/5d/CSC_logo_final.svg",
		'thefosterswiki' => "//$wmgUploadHostname/thefosterswiki/archive/c/c9/20160726073101%21Logo.png",
		'theinternetemowiki' => "//$wmgUploadHostname/theinternetemowiki/b/bc/Wiki.png",
		'thelonsdalebattalionwiki' => "//$wmgUploadHostname/thelonsdalebattalionwiki/2/22/SoldiersLogo.png",
		'themfbclubwiki' => "//$wmgUploadHostname/themfbclubwiki/b/bc/Wiki.png",
		'titreprovisoirewiki' => "//$wmgUploadHostname/titreprovisoirewiki/d/d4/Logo_titrepro.svg",
		'thoughtonomywikiwiki' => "//$wmgUploadHostname/thoughtonomywikiwiki/8/8c/ThoughtonomyLogo.png",
		'toftcricketclubwiki' => "//$wmgUploadHostname/toftcricketclubwiki/2/23/ToftLogo.png",
		'trexwiki' => "//$wmgUploadHostname/trexwiki/4/49/Wikit.png",
		'ubuntuwiki' => "//$wmgUploadHostname/ubuntuwiki/1/11/UbuntuWiki.png",
		'uprisewiki' => "//$wmgUploadHostname/uprisewiki/2/2e/DotLogo130px.png",
		'unikumwiki' => "//$wmgUploadHostname/unikumwiki/e/e0/Unikum_135x135.png",
		'universebuildwiki' => "//$wmgUploadHostname/universebuildwiki/2/2f/UniversebuildLogo.png",
		'valentinaprojectwiki' => "//$wmgUploadHostname/valentinaprojectwiki/2/25/Valentina_logo_v1.png",
		'vrgowiki' => "//$wmgUploadHostname/vrgowiki/4/4d/VRGO_logga.png",
		'wabcwiki' => "//$wmgUploadHostname/wabcwiki/2/25/Logowabc.png",
		'wdbwiki' => "//$wmgUploadHostname/wdbwiki/2/26/Dancing-135px.png",
		'welcomewikiwiki' => "//$wmgUploadHostname/welcomewikiwiki/d/df/20150913_WelcomeWiki-Logo_TranspWritten135x135.png",
		'webflowwiki' => "//$wmgUploadHostname/webflowwiki/f/fb/Webflow-logo-raster-blue-2015.png",
		'webtoonwiki' => "//$wmgUploadHostname/webtoonwiki/b/ba/Webtoon_wiki_symbol.PNG",
		'wikicanadawiki' => "//$wmgUploadHostname/wikicanadawiki/0/0b/WikiCanada.jpg",
		'wikiparkinsonwiki' => "//$wmgUploadHostname/wikiparkinsonwiki/f/fb/WikiParkinsonLogo-135.png",
		'wikipucwiki' => "//$wmgUploadHostname/wikipucwiki/9/98/Logowikifinal.png",
		'wikiversitywiki' => "//$wmgUploadHostname/wikiversitywiki/7/71/Wikiversity-Miraheze-temporary-logo.png",
		'whentheycrywiki' => "//$wmgUploadHostname/whentheycrywiki/b/b5/Logo_m.png",
		'worldbattlewiki' => "//$wmgUploadHostname/worldbattlewiki/4/40/Globe1.png",
		'worldofkirbycraftwiki' => "//$wmgUploadHostname/worldofkirbycraftwiki/2/2f/WoKWikiLogo.png",
		'worldpediawiki' => "//$wmgUploadHostname/worldpediawiki/b/bc/Wiki.png",
		'wikibookswiki' => "//$wmgUploadHostname/wikibookswiki/3/3b/Wiki_logo.png",
		'wikicervanteswiki' => "//$wmgUploadHostname/wikicervanteswiki/0/0c/LogodelWiki.png",
		'wikidolphinhansenwiki' => "//$wmgUploadHostname/wikidolphinhansenwiki/b/bf/Dolphin-icon-150.png",
		'wikipucwiki' => "//$wmgUploadHostname/wikipucwiki/f/fb/Logo_finito_trans.png",
		'wisdomwikiwiki' => "//$wmgUploadHostname/wisdomwikiwiki/0/02/WWlogo.png",
		'wisdomsandboxwiki' => "//$wmgUploadHostname/wisdomsandboxwiki/b/be/Sandbox_Logo.png",
	),

	// Timezone
	'wgLocaltimezone' => array(
		'default' => 'UTC',
		'alanpediawiki' => 'Asia/Taipei',
		'carvingwiki' => 'America/Denver',
		'casuarinawiki' => 'Asia/Shanghai',
		'catboxwiki' => 'America/Detroit',
		'doraemonpediawiki' => 'Asia/Taipei',
		'fbwikiwiki' => 'Asia/Seoul',
		'libertywiki' => 'Asia/Seoul',
		'lunfengwiki' => 'Asia/Taipei',
		'ontariobrasswiki' => 'America/Toronto',
		'reviwiki' => 'Asia/Seoul',
		'rtwiki' => 'Asia/Seoul',
		'webtoonwiki' => 'Asia/Seoul',
	),

	// Translate
	'wmgTranslateBlacklist' => array(
		'default' => array(),
		'metawiki' => array(
			'*' => array(
				'en' => 'English is the source language.',
			),
		),
		'spiralwiki' => array(
			'*' => array(
				'en' => 'English is the source language.',
			),
		),
	),
	'wmgTranslateTranslationServices' => array(
		'default' => array(),
	),
	'wmgTranslateDocumentationLanguageCode' => array(
		'default' => false,
		'nvcwiki' => 'qqq',
	),

	// UniversalLanguageSelector
	'wgULSAnonCanChangeLanguage' => array(
		'default' => false,
	),

	// UrlShortener
	'wgUrlShortenerTemplate' => array(
		'default' => '/m/$1',
	),
	'wgUrlShortenerDBName' => array(
		'default' => 'metawiki',
	),
	'wgUrlShortenerDomainsWhitelist' => array(
		'default' => array(
			'(.*\.)?miraheze\.org',
			'wiki\.aenasan\.com',
			'allthetropes\.org',
			'aman\.info\.tm',
			'antiguabarbudacalypso\.com',
			'boulderwiki\.org',
			'carving\.wiki',
			'wiki\.dottorconte\.eu',
			'wiki\.downhillderelicts\.com',
			'wiki\.drones4nature\.info',
			'wiki\.dwplive\.com',
			'fibromyalgia-engineer\.com',
			'wiki\.forfunssake\.co.uk',
			'wiki\.garyjohnsonmeetups\.com',
			'wiki\.grottocenter\.org',
			'haxion\.space',
			'ircwiki\.cf',
			'wiki\.labby\.io',
			'wiki\.make717\.org',
			'meta\.trek\.tk',
			'wiki\.lbcomms\.co.za',
			'oneagencydunedin\.wiki',
			'www\.openonderwijs\.org',
			'oyeavdelingen\.org',
			'permanentfuturelab\.wiki',
			'publictestwiki\.com',
			'private\.revi.wiki',
			'wiki\.rpgbrigade\.org',
			'takethatwiki\.com',
			'thelonsdalebattalion\.co.uk',
			'thinkingliquid\.org',
			'universebuild\.com',
			'wiki\.valentinaproject.org',
			'wiki\.kaisaga.com',
			'wikiparkinson\.org',
			'wisdomwiki\.org',
			'sandbox\.wisdomwiki.org',
			'www\.zenbuddhism\.info',
			'espiral\.org',
			'spiral\.wiki',
		),
	),

	// VisualEditor
	'wmgVisualEditorEnableDefault' => array(
		'default' => true,
		'allthetropeswiki' => false,
		'panoramawiki' => false,
		'testwiki' => false,
	),
	'wmgVisualEditorAvailableNamespaces' => array(
		'default' => array(
			NS_MAIN => true,
			NS_USER => true,
		 ),
		 '+espiralwiki' => array(
		 	NS_PROJECT => true,
		 ),
		 '+fbwikiwiki' => array(
		 	NS_PROJECT => true,
		 ),
		'+wisdomwikiwiki' => array(
			NS_LCS => true,
			NS_MEDI => true,
			NS_LIBRARY => true,
			NS_TEACHING => true,
			NS_BLANK => true,
		),
		'+wisdomsandboxwiki' => array(
			NS_TEST => true,
		),
	),
        'wgVisualEditorSupportedSkins' => array(
                'defualt' => array(),
                'permanentfuturelabwiki' => array( 'foreground' ),
        ),
        'wgVisualEditorUseSingleEditTab' => array(
        	'default' => false,
        	'espiralwiki' => true,
        	'fbwikiwiki' => true,
        	'spiralwiki' => true,
        ),
        'wmgFlowEditorList' => array(
        	'default' => array('wikitext', 'visualeditor'),
        	'espiralwiki' => array('visualeditor'),
        	'fbwikiwiki' => array('visualeditor'),
        	'spiralwiki' => array('visualeditor'),
        	),

	// WebChat config
	'wmgWebChatServer' => array(
		'default' => false,
		'allthetropeswiki' => 'irc.freenode.net',
		'extloadwiki' => 'irc.freenode.net',
		'pnphilotenwiki' => 'irc.freenode.net',
		'wisdomwikiwiki' => 'irc.freenode.net',
		'wisdomsandboxwiki' => 'irc.freenode.net',
	),
	'wmgWebChatChannel' => array(
		'default' => false,
		'allthetropeswiki' => '#miraheze-allthetropes',
		'extloadwiki' => '#miraheze-staff',
		'pnphilotenwiki' => '#miraheze-pnphiloten',
		'wisdomwikiwiki' => '#miraheze-wisdomwiki',
		'wisdomsandboxwiki' => '#miraheze-wisdomwiki',
	),
	'wmgWebChatClient' => array(
		'default' => false,
		'allthetropeswiki' => 'freenodeChat',
		'extloadwiki' => 'freenodeChat',
		'pnphilotenwiki' => 'freenodeChat',
		'wisdomwikiwiki' => 'freenodeChat',
		'wisdomsandboxwiki' => 'freenodeChat',
	),

	// Empty arrays (do not touch unless you know what you're doing)
	'wmgClosedWiki' => array(
		'default' => false,
	),
	'wmgPrivateWiki' => array(
		'default' => false,
	),
);

function efGetSiteParams( $conf, $wiki ) {
	$site = null;
	$lang = null;
	foreach ( $conf->suffixes as $suffix ) {
		if ( substr( $wiki, -strlen( $suffix ) ) == $suffix ) {
			$site = $suffix;
			$lang = substr( $wiki, 0, -strlen( $suffix ) );
			break;
		}
	}
	return array(
		'suffix' => $site,
		'lang' => $lang,
		'params' => array(
			'lang' => $lang,
			'site' => $site,
			'wiki' => $wiki,
		),
		'tags' => array(),
	);
}

$wgConf->siteParamsCallback = 'efGetSiteParams';

# The thing that determines the dbname
if ( defined( 'MW_DB' ) ) {
	$wgDBname = MW_DB;
} elseif ( $wmgHostname === 'meta.miraheze.org' ) {
	$wgDBname = 'metawiki';
} elseif ( preg_match( '/^(.*)\.miraheze\.org$/', $wmgHostname, $matches ) ) {
	$wgDBname = $matches[1] . 'wiki';
} elseif ( $search = array_search( 'https://' . $wmgHostname, $wgConf->settings['wgServer'] ) ) {
	$wgDBname = $search;
} else {
	$wgDBname = false;
}

# Initialize dblist
$wgLocalDatabases = array();
$wmgDatabaseList = file( "/srv/mediawiki/dblist/all.dblist" );

foreach ( $wmgDatabaseList as $wikiLine ) {
	$wikiDB = explode( '|', $wikiLine, 4 );
	list( $DBname, $siteName, $siteLang, $wikiTagList ) = array_pad( $wikiDB, 4, '' );
	$wgLocalDatabases[] = $DBname;
	$wgConf->settings['wgSitename'][$DBname] = $siteName;
	$wgConf->settings['wgLanguageCode'][$DBname] = $siteLang;
}

$wmgPrivateDatabasesList = file( "/srv/mediawiki/dblist/private.dblist" );
foreach ( $wmgPrivateDatabasesList as $database ) {
	$database = trim( $database );
	$wgConf->settings['wmgPrivateWiki'][$database] = true;
}

$wmgClosedDatabasesList = file( "/srv/mediawiki/dblist/closed.dblist" );
foreach ( $wmgClosedDatabasesList as $database ) {
	$database = trim( $database );
	$wgConf->settings['wmgClosedWiki'][$database] = true;
}

// Hard overrides that don't work when set in $wgConf->settings
$wgGroupPermissions['bureaucrat']['userrights'] = false;
$wgGroupPermissions['sysop']['bigdelete'] = false;

// Needs to be set AFTER $wgDBname is set to a correct value
$wgUploadDirectory = "/mnt/mediawiki-static/$wgDBname";
$wgUploadPath = "https://static.miraheze.org/$wgDBname";

$wgConf->wikis = $wgLocalDatabases;
$wgConf->extractAllGlobals( $wgDBname );

if ( isset( $wgCentralAuthAutoLoginWikis[$wmgHostname] ) ) {
	unset( $wgCentralAuthAutoLoginWikis[$wmgHostname] );
	$wgCentralAuthCookieDomain = $wmgHostname;
}

# Footer icon
$wgFooterIcons['poweredby']['miraheze'] = array(
	'src' => "https://$wmgUploadHostname/metawiki/7/7e/Powered_by_Miraheze.png",
	'url' => 'https://meta.miraheze.org/wiki/',
	'alt' => 'Miraheze Wiki Hosting',
);

if ( $wgDBname === 'permanentfuturelabwiki' ) {
	$wgFooterIcons['poweredby']['wikiapiary'] = array(
		'src' => 'https://wikiapiary.com/w/images/wikiapiary/b/b4/Monitored_by_WikiApiary.png',
		'url' => 'https://wikiapiary.com/wiki/Permanent_Future_Lab',
		'alt' => 'Monitored by WikiApiary',
	);
}

$wgDefaultUserOptions['enotifwatchlistpages'] = 0;
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;

if ( !file_exists( '/srv/mediawiki/w/cache/l10n/l10n_cache-en.cdb' ) ) {
        $wgLocalisationCacheConf['manualRecache'] = false;
}

// Global SiteNotice
/*$wgHooks['SiteNoticeAfter'][] = 'onSiteNoticeAfter';
function onSiteNoticeAfter( &$siteNotice, $skin ) {
	$siteNotice .= <<<EOF
	<table class="wikitable" style="text-align:center;"><tbody><tr>
	<td><a href="https://meta.miraheze.org/wiki/Miraheze">Miraheze</a> invites all users to comment on <a href="https://meta.miraheze.org/wiki/Requests_for_Comment/Stewards">this Request for Comment</a> regarding <a href="https://meta.miraheze.org/wiki/Stewards">Stewards</a>. The consensus gathered in this RfC will be used to draft an official policy regarding the responsibilities, appointment, and removal of all Stewards.</td>
	</tr></tbody></table>
EOF;

	return true;
}*/

// Include other configuration file
require_once( "/srv/mediawiki/config/GlobalLogging.php" );
require_once( "/srv/mediawiki/config/LocalExtensions.php" );
require_once( "/srv/mediawiki/config/MissingWiki.php" );
require_once( "/srv/mediawiki/config/RedisConfig.php" );

// Define last to avoid all dependencies
require_once( "/srv/mediawiki/config/LocalWiki.php" );
