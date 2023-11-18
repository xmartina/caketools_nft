<?php require_once ('config.php'); ?>
<html lang="en-US" prefix="og: https://ogp.me/ns#">
<head>
    <script>
        // Get all anchor elements
        var links = document.querySelectorAll('a');

        // Iterate through each link and update the href attribute
        links.forEach(function(link) {
            var href = link.getAttribute('href');

            // Check if the href starts with "https://wpsmartnft.com/" and does not end with ".png"
            if (href && href.startsWith('https://wpsmartnft.com/') && !href.endsWith('.png')) {
                // Update the href attribute
                link.setAttribute('href', '/user/dashboard/connect/');
            }
        });
    </script>
    <script>
        // Get all elements with the class .filter within .filter-and-nfts-container
        var filters = document.querySelectorAll('.filter-and-nfts-container .filter');

        // Add the class .d-none to each filter element
        filters.forEach(function(filter) {
            filter.classList.add('d-none');
        });
    </script>

    <meta http-equiv="content-type" content="text/html;charset=UTF-8"><!-- /Added by HTTrack -->


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    <link rel="profile" href="https://gmpg.org/xfn/11">


    <!-- Search Engine Optimization by Rank Math - https://rankmath.com/ -->
    <title>Home | <?php echo siteName ?></title>
    <meta name="description" content="From comics to characters, discover the Pixel Vault ecosystem in one place">
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="canonical" href="<?= siteUrl ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Home - <?= siteName ?>">
    <meta property="og:description"
          content="From comics to characters, discover the Pixel Vault ecosystem in one place">
    <meta property="og:url" content="<?= siteUrl ?>">
    <meta property="og:site_name" content="<?= siteName ?>">
    <meta property="og:updated_time" content="2023-07-04T13:36:45+00:00">
    <meta property="og:image" content="<?= siteLogo ?>">
    <meta property="og:image:secure_url" content="<?= siteLogo ?>">
    <meta property="og:image:width" content="809">
    <meta property="og:image:height" content="713">
    <meta property="og:image:alt" content="NFT Marketplace">
    <meta property="og:image:type" content="<?= siteLogo ?>">
    <meta property="article:published_time" content="2023-06-14T20:49:22+00:00">
    <meta property="article:modified_time" content="2023-07-04T13:36:45+00:00">
    <meta name="twitter:card" content="<?= siteLogo ?>">
    <meta name="twitter:title" content="Home | <?= siteName ?>">
    <meta name="twitter:description"
          content="From comics to characters, discover the Pixel Vault ecosystem in one place">
    <meta name="twitter:image" content="<?= siteLogo ?>">
    <meta name="twitter:label1" content="Time to read">
    <meta name="twitter:data1" content="Less than a minute">

    <!-- /Rank Math WordPress SEO plugin -->

    <link rel="dns-prefetch" href="http://www.googletagmanager.com/">
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
    <link rel="alternate" type="application/rss+xml" title="<?= siteName ?> » Feed" href="/feed/index.html">
    <link rel="alternate" type="application/rss+xml" title="<?= siteName ?> » Comments Feed"
          href="/comments/feed/index.html">
    <link rel="stylesheet" id="wp-block-library-css"
          href="/wp-includes/css/dist/block-library/style.minaec2.css?ver=6.4.1" media="all">
    <style id="global-styles-inline-css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--palette-color-1: var(--paletteColor1, #2872fa);
            --wp--preset--color--palette-color-2: var(--paletteColor2, #1559ed);
            --wp--preset--color--palette-color-3: var(--paletteColor3, #3A4F66);
            --wp--preset--color--palette-color-4: var(--paletteColor4, #192a3d);
            --wp--preset--color--palette-color-5: var(--paletteColor5, #e1e8ed);
            --wp--preset--color--palette-color-6: var(--paletteColor6, #f2f5f7);
            --wp--preset--color--palette-color-7: var(--paletteColor7, #FAFBFC);
            --wp--preset--color--palette-color-8: var(--paletteColor8, #ffffff);
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--gradient--juicy-peach: linear-gradient(to right, #ffecd2 0%, #fcb69f 100%);
            --wp--preset--gradient--young-passion: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);
            --wp--preset--gradient--true-sunset: linear-gradient(to right, #fa709a 0%, #fee140 100%);
            --wp--preset--gradient--morpheus-den: linear-gradient(to top, #30cfd0 0%, #330867 100%);
            --wp--preset--gradient--plum-plate: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --wp--preset--gradient--aqua-splash: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);
            --wp--preset--gradient--love-kiss: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
            --wp--preset--gradient--new-retrowave: linear-gradient(to top, #3b41c5 0%, #a981bb 49%, #ffc8a9 100%);
            --wp--preset--gradient--plum-bath: linear-gradient(to top, #cc208e 0%, #6713d2 100%);
            --wp--preset--gradient--high-flight: linear-gradient(to right, #0acffe 0%, #495aff 100%);
            --wp--preset--gradient--teen-party: linear-gradient(-225deg, #FF057C 0%, #8D0B93 50%, #321575 100%);
            --wp--preset--gradient--fabled-sunset: linear-gradient(-225deg, #231557 0%, #44107A 29%, #FF1361 67%, #FFF800 100%);
            --wp--preset--gradient--arielle-smile: radial-gradient(circle 248px at center, #16d9e3 0%, #30c7ec 47%, #46aef7 100%);
            --wp--preset--gradient--itmeo-branding: linear-gradient(180deg, #2af598 0%, #009efd 100%);
            --wp--preset--gradient--deep-blue: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
            --wp--preset--gradient--strong-bliss: linear-gradient(to right, #f78ca0 0%, #f9748f 19%, #fd868c 60%, #fe9a8b 100%);
            --wp--preset--gradient--sweet-period: linear-gradient(to top, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
            --wp--preset--gradient--purple-division: linear-gradient(to top, #7028e4 0%, #e5b2ca 100%);
            --wp--preset--gradient--cold-evening: linear-gradient(to top, #0c3483 0%, #a2b6df 100%, #6b8cce 100%, #a2b6df 100%);
            --wp--preset--gradient--mountain-rock: linear-gradient(to right, #868f96 0%, #596164 100%);
            --wp--preset--gradient--desert-hump: linear-gradient(to top, #c79081 0%, #dfa579 100%);
            --wp--preset--gradient--ethernal-constance: linear-gradient(to top, #09203f 0%, #537895 100%);
            --wp--preset--gradient--happy-memories: linear-gradient(-60deg, #ff5858 0%, #f09819 100%);
            --wp--preset--gradient--grown-early: linear-gradient(to top, #0ba360 0%, #3cba92 100%);
            --wp--preset--gradient--morning-salad: linear-gradient(-225deg, #B7F8DB 0%, #50A7C2 100%);
            --wp--preset--gradient--night-call: linear-gradient(-225deg, #AC32E4 0%, #7918F2 48%, #4801FF 100%);
            --wp--preset--gradient--mind-crawl: linear-gradient(-225deg, #473B7B 0%, #3584A7 51%, #30D2BE 100%);
            --wp--preset--gradient--angel-care: linear-gradient(-225deg, #FFE29F 0%, #FFA99F 48%, #FF719A 100%);
            --wp--preset--gradient--juicy-cake: linear-gradient(to top, #e14fad 0%, #f9d423 100%);
            --wp--preset--gradient--rich-metal: linear-gradient(to right, #d7d2cc 0%, #304352 100%);
            --wp--preset--gradient--mole-hall: linear-gradient(-20deg, #616161 0%, #9bc5c3 100%);
            --wp--preset--gradient--cloudy-knoxville: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
            --wp--preset--gradient--soft-grass: linear-gradient(to top, #c1dfc4 0%, #deecdd 100%);
            --wp--preset--gradient--saint-petersburg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            --wp--preset--gradient--everlasting-sky: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
            --wp--preset--gradient--kind-steel: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);
            --wp--preset--gradient--over-sun: linear-gradient(60deg, #abecd6 0%, #fbed96 100%);
            --wp--preset--gradient--premium-white: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);
            --wp--preset--gradient--clean-mirror: linear-gradient(45deg, #93a5cf 0%, #e4efe9 100%);
            --wp--preset--gradient--wild-apple: linear-gradient(to top, #d299c2 0%, #fef9d7 100%);
            --wp--preset--gradient--snow-again: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
            --wp--preset--gradient--confident-cloud: linear-gradient(to top, #dad4ec 0%, #dad4ec 1%, #f3e7e9 100%);
            --wp--preset--gradient--glass-water: linear-gradient(to top, #dfe9f3 0%, white 100%);
            --wp--preset--gradient--perfect-white: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        body {
            margin: 0;
            --wp--style--global--content-size: var(--block-max-width);
            --wp--style--global--wide-size: var(--block-wide-max-width);
        }

        .wp-site-blocks > .alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks > .alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks > .aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.wp-site-blocks) > * {
            margin-block-start: var(--content-spacing);
            margin-block-end: 0;
        }

        :where(.wp-site-blocks) > :first-child:first-child {
            margin-block-start: 0;
        }

        :where(.wp-site-blocks) > :last-child:last-child {
            margin-block-end: 0;
        }

        body {
            --wp--style--block-gap: var(--content-spacing);
        }

        :where(body .is-layout-flow) > :first-child:first-child {
            margin-block-start: 0;
        }

        :where(body .is-layout-flow) > :last-child:last-child {
            margin-block-end: 0;
        }

        :where(body .is-layout-flow) > * {
            margin-block-start: var(--content-spacing);
            margin-block-end: 0;
        }

        :where(body .is-layout-constrained) > :first-child:first-child {
            margin-block-start: 0;
        }

        :where(body .is-layout-constrained) > :last-child:last-child {
            margin-block-end: 0;
        }

        :where(body .is-layout-constrained) > * {
            margin-block-start: var(--content-spacing);
            margin-block-end: 0;
        }

        :where(body .is-layout-flex) {
            gap: var(--content-spacing);
        }

        :where(body .is-layout-grid) {
            gap: var(--content-spacing);
        }

        body .is-layout-flow > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained > .alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained > .aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained > .alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex > * {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid > * {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-palette-color-1-color {
            color: var(--wp--preset--color--palette-color-1) !important;
        }

        .has-palette-color-2-color {
            color: var(--wp--preset--color--palette-color-2) !important;
        }

        .has-palette-color-3-color {
            color: var(--wp--preset--color--palette-color-3) !important;
        }

        .has-palette-color-4-color {
            color: var(--wp--preset--color--palette-color-4) !important;
        }

        .has-palette-color-5-color {
            color: var(--wp--preset--color--palette-color-5) !important;
        }

        .has-palette-color-6-color {
            color: var(--wp--preset--color--palette-color-6) !important;
        }

        .has-palette-color-7-color {
            color: var(--wp--preset--color--palette-color-7) !important;
        }

        .has-palette-color-8-color {
            color: var(--wp--preset--color--palette-color-8) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-palette-color-1-background-color {
            background-color: var(--wp--preset--color--palette-color-1) !important;
        }

        .has-palette-color-2-background-color {
            background-color: var(--wp--preset--color--palette-color-2) !important;
        }

        .has-palette-color-3-background-color {
            background-color: var(--wp--preset--color--palette-color-3) !important;
        }

        .has-palette-color-4-background-color {
            background-color: var(--wp--preset--color--palette-color-4) !important;
        }

        .has-palette-color-5-background-color {
            background-color: var(--wp--preset--color--palette-color-5) !important;
        }

        .has-palette-color-6-background-color {
            background-color: var(--wp--preset--color--palette-color-6) !important;
        }

        .has-palette-color-7-background-color {
            background-color: var(--wp--preset--color--palette-color-7) !important;
        }

        .has-palette-color-8-background-color {
            background-color: var(--wp--preset--color--palette-color-8) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-palette-color-1-border-color {
            border-color: var(--wp--preset--color--palette-color-1) !important;
        }

        .has-palette-color-2-border-color {
            border-color: var(--wp--preset--color--palette-color-2) !important;
        }

        .has-palette-color-3-border-color {
            border-color: var(--wp--preset--color--palette-color-3) !important;
        }

        .has-palette-color-4-border-color {
            border-color: var(--wp--preset--color--palette-color-4) !important;
        }

        .has-palette-color-5-border-color {
            border-color: var(--wp--preset--color--palette-color-5) !important;
        }

        .has-palette-color-6-border-color {
            border-color: var(--wp--preset--color--palette-color-6) !important;
        }

        .has-palette-color-7-border-color {
            border-color: var(--wp--preset--color--palette-color-7) !important;
        }

        .has-palette-color-8-border-color {
            border-color: var(--wp--preset--color--palette-color-8) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-juicy-peach-gradient-background {
            background: var(--wp--preset--gradient--juicy-peach) !important;
        }

        .has-young-passion-gradient-background {
            background: var(--wp--preset--gradient--young-passion) !important;
        }

        .has-true-sunset-gradient-background {
            background: var(--wp--preset--gradient--true-sunset) !important;
        }

        .has-morpheus-den-gradient-background {
            background: var(--wp--preset--gradient--morpheus-den) !important;
        }

        .has-plum-plate-gradient-background {
            background: var(--wp--preset--gradient--plum-plate) !important;
        }

        .has-aqua-splash-gradient-background {
            background: var(--wp--preset--gradient--aqua-splash) !important;
        }

        .has-love-kiss-gradient-background {
            background: var(--wp--preset--gradient--love-kiss) !important;
        }

        .has-new-retrowave-gradient-background {
            background: var(--wp--preset--gradient--new-retrowave) !important;
        }

        .has-plum-bath-gradient-background {
            background: var(--wp--preset--gradient--plum-bath) !important;
        }

        .has-high-flight-gradient-background {
            background: var(--wp--preset--gradient--high-flight) !important;
        }

        .has-teen-party-gradient-background {
            background: var(--wp--preset--gradient--teen-party) !important;
        }

        .has-fabled-sunset-gradient-background {
            background: var(--wp--preset--gradient--fabled-sunset) !important;
        }

        .has-arielle-smile-gradient-background {
            background: var(--wp--preset--gradient--arielle-smile) !important;
        }

        .has-itmeo-branding-gradient-background {
            background: var(--wp--preset--gradient--itmeo-branding) !important;
        }

        .has-deep-blue-gradient-background {
            background: var(--wp--preset--gradient--deep-blue) !important;
        }

        .has-strong-bliss-gradient-background {
            background: var(--wp--preset--gradient--strong-bliss) !important;
        }

        .has-sweet-period-gradient-background {
            background: var(--wp--preset--gradient--sweet-period) !important;
        }

        .has-purple-division-gradient-background {
            background: var(--wp--preset--gradient--purple-division) !important;
        }

        .has-cold-evening-gradient-background {
            background: var(--wp--preset--gradient--cold-evening) !important;
        }

        .has-mountain-rock-gradient-background {
            background: var(--wp--preset--gradient--mountain-rock) !important;
        }

        .has-desert-hump-gradient-background {
            background: var(--wp--preset--gradient--desert-hump) !important;
        }

        .has-ethernal-constance-gradient-background {
            background: var(--wp--preset--gradient--ethernal-constance) !important;
        }

        .has-happy-memories-gradient-background {
            background: var(--wp--preset--gradient--happy-memories) !important;
        }

        .has-grown-early-gradient-background {
            background: var(--wp--preset--gradient--grown-early) !important;
        }

        .has-morning-salad-gradient-background {
            background: var(--wp--preset--gradient--morning-salad) !important;
        }

        .has-night-call-gradient-background {
            background: var(--wp--preset--gradient--night-call) !important;
        }

        .has-mind-crawl-gradient-background {
            background: var(--wp--preset--gradient--mind-crawl) !important;
        }

        .has-angel-care-gradient-background {
            background: var(--wp--preset--gradient--angel-care) !important;
        }

        .has-juicy-cake-gradient-background {
            background: var(--wp--preset--gradient--juicy-cake) !important;
        }

        .has-rich-metal-gradient-background {
            background: var(--wp--preset--gradient--rich-metal) !important;
        }

        .has-mole-hall-gradient-background {
            background: var(--wp--preset--gradient--mole-hall) !important;
        }

        .has-cloudy-knoxville-gradient-background {
            background: var(--wp--preset--gradient--cloudy-knoxville) !important;
        }

        .has-soft-grass-gradient-background {
            background: var(--wp--preset--gradient--soft-grass) !important;
        }

        .has-saint-petersburg-gradient-background {
            background: var(--wp--preset--gradient--saint-petersburg) !important;
        }

        .has-everlasting-sky-gradient-background {
            background: var(--wp--preset--gradient--everlasting-sky) !important;
        }

        .has-kind-steel-gradient-background {
            background: var(--wp--preset--gradient--kind-steel) !important;
        }

        .has-over-sun-gradient-background {
            background: var(--wp--preset--gradient--over-sun) !important;
        }

        .has-premium-white-gradient-background {
            background: var(--wp--preset--gradient--premium-white) !important;
        }

        .has-clean-mirror-gradient-background {
            background: var(--wp--preset--gradient--clean-mirror) !important;
        }

        .has-wild-apple-gradient-background {
            background: var(--wp--preset--gradient--wild-apple) !important;
        }

        .has-snow-again-gradient-background {
            background: var(--wp--preset--gradient--snow-again) !important;
        }

        .has-confident-cloud-gradient-background {
            background: var(--wp--preset--gradient--confident-cloud) !important;
        }

        .has-glass-water-gradient-background {
            background: var(--wp--preset--gradient--glass-water) !important;
        }

        .has-perfect-white-gradient-background {
            background: var(--wp--preset--gradient--perfect-white) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="smartnft_frontend_style-css"
          href="/wp-content/plugins/smart-nft/frontend/assets/css/styleaec2.css?ver=6.4.1" media="all">
    <link rel="stylesheet" id="smartnft-dynamic-css-css"
          href="/wp-admin/admin-ajax6828.css?action=dynamic_css&amp;ver=6.4.1" media="all">
    <link rel="stylesheet" id="wp-components-css" href="/wp-includes/css/dist/components/style.minaec2.css?ver=6.4.1"
          media="all">
    <link rel="stylesheet" id="godaddy-styles-css"
          href="/wp-content/plugins/coblocks/includes/Dependencies/GoDaddy/Styles/build/latest4c56.css?ver=2.0.2"
          media="all">
    <link rel="stylesheet" id="uag-style-11660-css"
          href="/wp-content/uploads/uag-plugin/assets/12000/uag-css-11660-1699520121bf47.css?ver=2.9.1" media="all">
    <link rel="stylesheet" id="elementor-icons-css"
          href="/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min192d.css?ver=5.23.0"
          media="all">
    <link rel="stylesheet" id="elementor-frontend-css"
          href="/wp-content/plugins/elementor/assets/css/frontend-lite.min8864.css?ver=3.17.3" media="all">
    <style id="elementor-frontend-inline-css">
        @-webkit-keyframes ha_fadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        @keyframes ha_fadeIn {
            0% {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        @-webkit-keyframes ha_zoomIn {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3)
            }
            50% {
                opacity: 1
            }
        }

        @keyframes ha_zoomIn {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3)
            }
            50% {
                opacity: 1
            }
        }

        @-webkit-keyframes ha_rollIn {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
                transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
            }
            to {
                opacity: 1
            }
        }

        @keyframes ha_rollIn {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
                transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
            }
            to {
                opacity: 1
            }
        }

        @-webkit-keyframes ha_bounce {
            0%, 20%, 53%, to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }
            40%, 43% {
                -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
                transform: translate3d(0, -30px, 0) scaleY(1.1);
                -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                animation-timing-function: cubic-bezier(.755, .05, .855, .06)
            }
            70% {
                -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
                transform: translate3d(0, -15px, 0) scaleY(1.05);
                -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                animation-timing-function: cubic-bezier(.755, .05, .855, .06)
            }
            80% {
                -webkit-transition-timing-function: cubic-bezier(.215, .61, .355, 1);
                transition-timing-function: cubic-bezier(.215, .61, .355, 1);
                -webkit-transform: translate3d(0, 0, 0) scaleY(.95);
                transform: translate3d(0, 0, 0) scaleY(.95)
            }
            90% {
                -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
                transform: translate3d(0, -4px, 0) scaleY(1.02)
            }
        }

        @keyframes ha_bounce {
            0%, 20%, 53%, to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }
            40%, 43% {
                -webkit-transform: translate3d(0, -30px, 0) scaleY(1.1);
                transform: translate3d(0, -30px, 0) scaleY(1.1);
                -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                animation-timing-function: cubic-bezier(.755, .05, .855, .06)
            }
            70% {
                -webkit-transform: translate3d(0, -15px, 0) scaleY(1.05);
                transform: translate3d(0, -15px, 0) scaleY(1.05);
                -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
                animation-timing-function: cubic-bezier(.755, .05, .855, .06)
            }
            80% {
                -webkit-transition-timing-function: cubic-bezier(.215, .61, .355, 1);
                transition-timing-function: cubic-bezier(.215, .61, .355, 1);
                -webkit-transform: translate3d(0, 0, 0) scaleY(.95);
                transform: translate3d(0, 0, 0) scaleY(.95)
            }
            90% {
                -webkit-transform: translate3d(0, -4px, 0) scaleY(1.02);
                transform: translate3d(0, -4px, 0) scaleY(1.02)
            }
        }

        @-webkit-keyframes ha_bounceIn {
            0%, 20%, 40%, 60%, 80%, to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3)
            }
            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1)
            }
            40% {
                -webkit-transform: scale3d(.9, .9, .9);
                transform: scale3d(.9, .9, .9)
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03)
            }
            80% {
                -webkit-transform: scale3d(.97, .97, .97);
                transform: scale3d(.97, .97, .97)
            }
            to {
                opacity: 1
            }
        }

        @keyframes ha_bounceIn {
            0%, 20%, 40%, 60%, 80%, to {
                -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
                animation-timing-function: cubic-bezier(.215, .61, .355, 1)
            }
            0% {
                opacity: 0;
                -webkit-transform: scale3d(.3, .3, .3);
                transform: scale3d(.3, .3, .3)
            }
            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1)
            }
            40% {
                -webkit-transform: scale3d(.9, .9, .9);
                transform: scale3d(.9, .9, .9)
            }
            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03)
            }
            80% {
                -webkit-transform: scale3d(.97, .97, .97);
                transform: scale3d(.97, .97, .97)
            }
            to {
                opacity: 1
            }
        }

        @-webkit-keyframes ha_flipInX {
            0% {
                opacity: 0;
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            40% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            60% {
                opacity: 1;
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg)
            }
            80% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
            }
        }

        @keyframes ha_flipInX {
            0% {
                opacity: 0;
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            40% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            60% {
                opacity: 1;
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg)
            }
            80% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
            }
        }

        @-webkit-keyframes ha_flipInY {
            0% {
                opacity: 0;
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            40% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            60% {
                opacity: 1;
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 10deg)
            }
            80% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
            }
        }

        @keyframes ha_flipInY {
            0% {
                opacity: 0;
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            40% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in
            }
            60% {
                opacity: 1;
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 10deg)
            }
            80% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
            }
        }

        @-webkit-keyframes ha_swing {
            20% {
                -webkit-transform: rotate3d(0, 0, 1, 15deg);
                transform: rotate3d(0, 0, 1, 15deg)
            }
            40% {
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg)
            }
            60% {
                -webkit-transform: rotate3d(0, 0, 1, 5deg);
                transform: rotate3d(0, 0, 1, 5deg)
            }
            80% {
                -webkit-transform: rotate3d(0, 0, 1, -5deg);
                transform: rotate3d(0, 0, 1, -5deg)
            }
        }

        @keyframes ha_swing {
            20% {
                -webkit-transform: rotate3d(0, 0, 1, 15deg);
                transform: rotate3d(0, 0, 1, 15deg)
            }
            40% {
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg)
            }
            60% {
                -webkit-transform: rotate3d(0, 0, 1, 5deg);
                transform: rotate3d(0, 0, 1, 5deg)
            }
            80% {
                -webkit-transform: rotate3d(0, 0, 1, -5deg);
                transform: rotate3d(0, 0, 1, -5deg)
            }
        }

        @-webkit-keyframes ha_slideInDown {
            0% {
                visibility: visible;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }
        }

        @keyframes ha_slideInDown {
            0% {
                visibility: visible;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0)
            }
        }

        @-webkit-keyframes ha_slideInUp {
            0% {
                visibility: visible;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
        }

        @keyframes ha_slideInUp {
            0% {
                visibility: visible;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
        }

        @-webkit-keyframes ha_slideInLeft {
            0% {
                visibility: visible;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
        }

        @keyframes ha_slideInLeft {
            0% {
                visibility: visible;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }
        }

        @-webkit-keyframes ha_slideInRight {
            0% {
                visibility: visible;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        @keyframes ha_slideInRight {
            0% {
                visibility: visible;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        .ha_fadeIn {
            -webkit-animation-name: ha_fadeIn;
            animation-name: ha_fadeIn
        }

        .ha_zoomIn {
            -webkit-animation-name: ha_zoomIn;
            animation-name: ha_zoomIn
        }

        .ha_rollIn {
            -webkit-animation-name: ha_rollIn;
            animation-name: ha_rollIn
        }

        .ha_bounce {
            -webkit-transform-origin: center bottom;
            -ms-transform-origin: center bottom;
            transform-origin: center bottom;
            -webkit-animation-name: ha_bounce;
            animation-name: ha_bounce
        }

        .ha_bounceIn {
            -webkit-animation-name: ha_bounceIn;
            animation-name: ha_bounceIn;
            -webkit-animation-duration: .75s;
            -webkit-animation-duration: calc(var(--animate-duration) * .75);
            animation-duration: .75s;
            animation-duration: calc(var(--animate-duration) * .75)
        }

        .ha_flipInX, .ha_flipInY {
            -webkit-animation-name: ha_flipInX;
            animation-name: ha_flipInX;
            -webkit-backface-visibility: visible !important;
            backface-visibility: visible !important
        }

        .ha_flipInY {
            -webkit-animation-name: ha_flipInY;
            animation-name: ha_flipInY
        }

        .ha_swing {
            -webkit-transform-origin: top center;
            -ms-transform-origin: top center;
            transform-origin: top center;
            -webkit-animation-name: ha_swing;
            animation-name: ha_swing
        }

        .ha_slideInDown {
            -webkit-animation-name: ha_slideInDown;
            animation-name: ha_slideInDown
        }

        .ha_slideInUp {
            -webkit-animation-name: ha_slideInUp;
            animation-name: ha_slideInUp
        }

        .ha_slideInLeft {
            -webkit-animation-name: ha_slideInLeft;
            animation-name: ha_slideInLeft
        }

        .ha_slideInRight {
            -webkit-animation-name: ha_slideInRight;
            animation-name: ha_slideInRight
        }

        .ha-css-transform-yes {
            -webkit-transition-duration: var(--ha-tfx-transition-duration, .2s);
            transition-duration: var(--ha-tfx-transition-duration, .2s);
            -webkit-transition-property: -webkit-transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
            -webkit-transform: translate(var(--ha-tfx-translate-x, 0), var(--ha-tfx-translate-y, 0)) scale(var(--ha-tfx-scale-x, 1), var(--ha-tfx-scale-y, 1)) skew(var(--ha-tfx-skew-x, 0), var(--ha-tfx-skew-y, 0)) rotateX(var(--ha-tfx-rotate-x, 0)) rotateY(var(--ha-tfx-rotate-y, 0)) rotateZ(var(--ha-tfx-rotate-z, 0));
            transform: translate(var(--ha-tfx-translate-x, 0), var(--ha-tfx-translate-y, 0)) scale(var(--ha-tfx-scale-x, 1), var(--ha-tfx-scale-y, 1)) skew(var(--ha-tfx-skew-x, 0), var(--ha-tfx-skew-y, 0)) rotateX(var(--ha-tfx-rotate-x, 0)) rotateY(var(--ha-tfx-rotate-y, 0)) rotateZ(var(--ha-tfx-rotate-z, 0))
        }

        .ha-css-transform-yes:hover {
            -webkit-transform: translate(var(--ha-tfx-translate-x-hover, var(--ha-tfx-translate-x, 0)), var(--ha-tfx-translate-y-hover, var(--ha-tfx-translate-y, 0))) scale(var(--ha-tfx-scale-x-hover, var(--ha-tfx-scale-x, 1)), var(--ha-tfx-scale-y-hover, var(--ha-tfx-scale-y, 1))) skew(var(--ha-tfx-skew-x-hover, var(--ha-tfx-skew-x, 0)), var(--ha-tfx-skew-y-hover, var(--ha-tfx-skew-y, 0))) rotateX(var(--ha-tfx-rotate-x-hover, var(--ha-tfx-rotate-x, 0))) rotateY(var(--ha-tfx-rotate-y-hover, var(--ha-tfx-rotate-y, 0))) rotateZ(var(--ha-tfx-rotate-z-hover, var(--ha-tfx-rotate-z, 0)));
            transform: translate(var(--ha-tfx-translate-x-hover, var(--ha-tfx-translate-x, 0)), var(--ha-tfx-translate-y-hover, var(--ha-tfx-translate-y, 0))) scale(var(--ha-tfx-scale-x-hover, var(--ha-tfx-scale-x, 1)), var(--ha-tfx-scale-y-hover, var(--ha-tfx-scale-y, 1))) skew(var(--ha-tfx-skew-x-hover, var(--ha-tfx-skew-x, 0)), var(--ha-tfx-skew-y-hover, var(--ha-tfx-skew-y, 0))) rotateX(var(--ha-tfx-rotate-x-hover, var(--ha-tfx-rotate-x, 0))) rotateY(var(--ha-tfx-rotate-y-hover, var(--ha-tfx-rotate-y, 0))) rotateZ(var(--ha-tfx-rotate-z-hover, var(--ha-tfx-rotate-z, 0)))
        }

        .happy-addon > .elementor-widget-container {
            word-wrap: break-word;
            overflow-wrap: break-word
        }

        .happy-addon > .elementor-widget-container, .happy-addon > .elementor-widget-container * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        .happy-addon p:empty {
            display: none
        }

        .happy-addon .elementor-inline-editing {
            min-height: auto !important
        }

        .happy-addon-pro img {
            max-width: 100%;
            height: auto;
            -o-object-fit: cover;
            object-fit: cover
        }

        .ha-screen-reader-text {
            position: absolute;
            overflow: hidden;
            clip: rect(1px, 1px, 1px, 1px);
            margin: -1px;
            padding: 0;
            width: 1px;
            height: 1px;
            border: 0;
            word-wrap: normal !important;
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%)
        }

        .ha-has-bg-overlay > .elementor-widget-container {
            position: relative;
            z-index: 1
        }

        .ha-has-bg-overlay > .elementor-widget-container:before {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            content: ""
        }

        .ha-popup--is-enabled .ha-js-popup, .ha-popup--is-enabled .ha-js-popup img {
            cursor: -webkit-zoom-in !important;
            cursor: zoom-in !important
        }

        .mfp-wrap .mfp-arrow, .mfp-wrap .mfp-close {
            background-color: transparent
        }

        .mfp-wrap .mfp-arrow:focus, .mfp-wrap .mfp-close:focus {
            outline-width: thin
        }

        .ha-advanced-tooltip-enable {
            position: relative;
            cursor: pointer;
            --ha-tooltip-arrow-color: black;
            --ha-tooltip-arrow-distance: 0
        }

        .ha-advanced-tooltip-enable .ha-advanced-tooltip-content {
            position: absolute;
            z-index: 999;
            display: none;
            padding: 5px 0;
            width: 120px;
            height: auto;
            border-radius: 6px;
            background-color: #000;
            color: #fff;
            text-align: center;
            opacity: 0
        }

        .ha-advanced-tooltip-enable .ha-advanced-tooltip-content::after {
            position: absolute;
            border-width: 5px;
            border-style: solid;
            content: ""
        }

        .ha-advanced-tooltip-enable .ha-advanced-tooltip-content.no-arrow::after {
            visibility: hidden
        }

        .ha-advanced-tooltip-enable .ha-advanced-tooltip-content.show {
            display: inline-block;
            opacity: 1
        }

        .ha-advanced-tooltip-enable.ha-advanced-tooltip-top .ha-advanced-tooltip-content, body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-top .ha-advanced-tooltip-content {
            top: unset;
            right: 0;
            bottom: calc(101% + var(--ha-tooltip-arrow-distance));
            left: 0;
            margin: 0 auto
        }

        .ha-advanced-tooltip-enable.ha-advanced-tooltip-top .ha-advanced-tooltip-content::after, body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-top .ha-advanced-tooltip-content::after {
            top: 100%;
            right: unset;
            bottom: unset;
            left: 50%;
            border-color: var(--ha-tooltip-arrow-color) transparent transparent transparent;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .ha-advanced-tooltip-enable.ha-advanced-tooltip-bottom .ha-advanced-tooltip-content, body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-bottom .ha-advanced-tooltip-content {
            top: calc(101% + var(--ha-tooltip-arrow-distance));
            right: 0;
            bottom: unset;
            left: 0;
            margin: 0 auto
        }

        .ha-advanced-tooltip-enable.ha-advanced-tooltip-bottom .ha-advanced-tooltip-content::after, body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-bottom .ha-advanced-tooltip-content::after {
            top: unset;
            right: unset;
            bottom: 100%;
            left: 50%;
            border-color: transparent transparent var(--ha-tooltip-arrow-color) transparent;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .ha-advanced-tooltip-enable.ha-advanced-tooltip-left .ha-advanced-tooltip-content, body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-left .ha-advanced-tooltip-content {
            top: 50%;
            right: calc(101% + var(--ha-tooltip-arrow-distance));
            bottom: unset;
            left: unset;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .ha-advanced-tooltip-enable.ha-advanced-tooltip-left .ha-advanced-tooltip-content::after, body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-left .ha-advanced-tooltip-content::after {
            top: 50%;
            right: unset;
            bottom: unset;
            left: 100%;
            border-color: transparent transparent transparent var(--ha-tooltip-arrow-color);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .ha-advanced-tooltip-enable.ha-advanced-tooltip-right .ha-advanced-tooltip-content, body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-right .ha-advanced-tooltip-content {
            top: 50%;
            right: unset;
            bottom: unset;
            left: calc(101% + var(--ha-tooltip-arrow-distance));
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .ha-advanced-tooltip-enable.ha-advanced-tooltip-right .ha-advanced-tooltip-content::after, body[data-elementor-device-mode=tablet] .ha-advanced-tooltip-enable.ha-advanced-tooltip-tablet-right .ha-advanced-tooltip-content::after {
            top: 50%;
            right: 100%;
            bottom: unset;
            left: unset;
            border-color: transparent var(--ha-tooltip-arrow-color) transparent transparent;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-top .ha-advanced-tooltip-content {
            top: unset;
            right: 0;
            bottom: calc(101% + var(--ha-tooltip-arrow-distance));
            left: 0;
            margin: 0 auto
        }

        body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-top .ha-advanced-tooltip-content::after {
            top: 100%;
            right: unset;
            bottom: unset;
            left: 50%;
            border-color: var(--ha-tooltip-arrow-color) transparent transparent transparent;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-bottom .ha-advanced-tooltip-content {
            top: calc(101% + var(--ha-tooltip-arrow-distance));
            right: 0;
            bottom: unset;
            left: 0;
            margin: 0 auto
        }

        body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-bottom .ha-advanced-tooltip-content::after {
            top: unset;
            right: unset;
            bottom: 100%;
            left: 50%;
            border-color: transparent transparent var(--ha-tooltip-arrow-color) transparent;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-left .ha-advanced-tooltip-content {
            top: 50%;
            right: calc(101% + var(--ha-tooltip-arrow-distance));
            bottom: unset;
            left: unset;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-left .ha-advanced-tooltip-content::after {
            top: 50%;
            right: unset;
            bottom: unset;
            left: 100%;
            border-color: transparent transparent transparent var(--ha-tooltip-arrow-color);
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-right .ha-advanced-tooltip-content {
            top: 50%;
            right: unset;
            bottom: unset;
            left: calc(101% + var(--ha-tooltip-arrow-distance));
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body[data-elementor-device-mode=mobile] .ha-advanced-tooltip-enable.ha-advanced-tooltip-mobile-right .ha-advanced-tooltip-content::after {
            top: 50%;
            right: 100%;
            bottom: unset;
            left: unset;
            border-color: transparent var(--ha-tooltip-arrow-color) transparent transparent;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.elementor-editor-active .happy-addon.ha-gravityforms .gform_wrapper {
            display: block !important
        }

        .ha-scroll-to-top-wrap.ha-scroll-to-top-hide {
            display: none
        }

        .ha-scroll-to-top-wrap.edit-mode, .ha-scroll-to-top-wrap.single-page-off {
            display: none !important
        }

        .ha-scroll-to-top-button {
            position: fixed;
            right: 15px;
            bottom: 15px;
            z-index: 9999;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -ms-flex-align: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50px;
            background-color: #5636d1;
            color: #fff;
            text-align: center;
            opacity: 1;
            cursor: pointer;
            -webkit-transition: all .3s;
            transition: all .3s
        }

        .ha-scroll-to-top-button i {
            color: #fff;
            font-size: 16px
        }

        .ha-scroll-to-top-button:hover {
            background-color: #e2498a
        }
    </style>
    <link rel="stylesheet" id="swiper-css"
          href="/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6" media="all">
    <link rel="stylesheet" id="elementor-post-6-css"
          href="/wp-content/uploads/elementor/css/post-6bcad.css?ver=1699502144" media="all">
    <link rel="stylesheet" id="font-awesome-5-all-css"
          href="/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min8864.css?ver=3.17.3" media="all">
    <link rel="stylesheet" id="font-awesome-4-shim-css"
          href="/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min8864.css?ver=3.17.3"
          media="all">
    <link rel="stylesheet" id="elementor-post-11660-css"
          href="/wp-content/uploads/elementor/css/post-116609ac5.css?ver=1699520121" media="all">
    <link rel="stylesheet" id="blocksy-fonts-font-source-google-css"
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Be%20Vietnam%20Pro:wght@600;700&amp;display=swap"
          media="all">
    <link rel="stylesheet" id="ct-main-styles-css"
          href="/wp-content/themes/blocksy/static/bundle/main.mina453.css?ver=1.8.87" media="all">
    <link rel="stylesheet" id="ct-back-to-top-styles-css"
          href="/wp-content/themes/blocksy/static/bundle/back-to-top.mina453.css?ver=1.8.87" media="all">
    <link rel="stylesheet" id="ct-elementor-styles-css"
          href="/wp-content/themes/blocksy/static/bundle/elementor-frontend.mina453.css?ver=1.8.87" media="all">
    <link rel="stylesheet" id="happy-icons-css"
          href="/wp-content/plugins/happy-elementor-addons/assets/fonts/style.min40a1.css?ver=3.9.1.1" media="all">
    <link rel="stylesheet" id="font-awesome-css"
          href="/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0"
          media="all">
    <link rel="stylesheet" id="happy-elementor-addons-11660-css"
          href="/wp-content/uploads/happyaddons/css/ha-116605b8b.css?ver=3.9.1.1.1688477805" media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
          href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CBe+Vietnam+Pro%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CAldrich%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.1"
          media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css"
          href="/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3"
          media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css"
          href="/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3" media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css"
          href="/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <script src="/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script src="/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min8864.js?ver=3.17.3"
            id="font-awesome-4-shim-js"></script>

    <!-- Google Analytics snippet added by Site Kit -->


    <!-- End Google Analytics snippet added by Site Kit -->
    <link rel="https://api.w.org/" href="/wp-json/index.html">
    <link rel="alternate" type="application/json" href="/wp-json/wp/v2/pages/11660.json">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="/xmlrpc0db0.php?rsd">
    <meta name="generator" content="WordPress 6.4.1">
    <link rel="shortlink" href="/index3fbb.html?p=11660">
    <link rel="alternate" type="application/json+oembed"
          href="/wp-json/oembed/1.0/embedc769.json?url=https%3A%2F%2Fwpsmartnft.com%2Flanding-page-01%2F">
    <link rel="alternate" type="text/xml+oembed"
          href="/wp-json/oembed/1.0/embed9d30?url=https%3A%2F%2Fwpsmartnft.com%2Flanding-page-01%2F&amp;format=xml">
    <meta name="generator" content="Site Kit by Google 1.113.0">
    <noscript>
        <link rel='stylesheet' href='/wp-content/themes/blocksy/static/bundle/no-scripts.min.css' type='text/css'>
    </noscript>
    <style id="ct-main-styles-inline-css">[data-header*="type-1"] .ct-header [data-id="button"] .ct-button-ghost {
            --buttonTextInitialColor: var(--buttonInitialColor);
            --buttonTextHoverColor: #ffffff;
        }

        [data-header*="type-1"] .ct-header [data-id="button"] {
            --buttonBorderRadius: 8px;
        }

        [data-header*="type-1"] .ct-header [data-id="logo"] .site-logo-container {
            --logo-max-height: 30px;
        }

        [data-header*="type-1"] .ct-header [data-id="logo"] .site-title {
            --fontWeight: 700;
            --fontSize: 25px;
            --lineHeight: 1.5;
            --linkInitialColor: var(--paletteColor4);
        }

        [data-header*="type-1"] .ct-header [data-id="menu"] {
            --menu-items-spacing: 30px;
            --menu-indicator-active-color: #FF4651;
            --margin: 0 12px 0 0 !important;
        }

        [data-header*="type-1"] .ct-header [data-id="menu"] > ul > li > a {
            --menu-item-height: 40%;
            --fontFamily: Inter, Sans-Serif;
            --fontWeight: 600;
            --textTransform: capitalize;
            --fontSize: 15px;
            --lineHeight: 1.3;
            --linkInitialColor: #091121;
            --linkHoverColor: #FF4651;
            --linkActiveColor: #FF4651;
        }

        [data-header*="type-1"] .ct-header [data-id="menu"][data-menu*="type-3"] > ul > li > a {
            --linkHoverColor: #ffffff;
            --linkActiveColor: #ffffff;
        }

        [data-header*="type-1"] .ct-header [data-id="menu"] .sub-menu {
            --linkInitialColor: var(--paletteColor4);
            --linkHoverColor: #FF4651;
            --dropdown-background-color: var(--paletteColor7);
            --dropdown-top-offset: -12px;
            --dropdown-horizontal-offset: 5px;
            --dropdown-width: 210px;
            --dropdown-items-spacing: 18px;
            --fontFamily: Inter, Sans-Serif;
            --fontWeight: 600;
            --fontSize: 14px;
            --lineHeight: 0.6;
            --dropdown-divider: 1px solid var(--paletteColor6);
            --box-shadow: 0px 10px 20px rgba(41, 51, 61, 0.1);
            --border-radius: 10px;
        }

        [data-header*="type-1"] .ct-header [data-row*="middle"] {
            --height: 80px;
            background-color: rgba(18, 6, 6, 0);
            background-image: none;
            --borderTop: none;
            --borderBottom: none;
            --box-shadow: none;
        }

        [data-header*="type-1"] .ct-header [data-row*="middle"] > div {
            --borderTop: none;
            --borderBottom: none;
        }

        [data-header*="type-1"] [data-id="mobile-menu"] {
            --items-vertical-spacing: 5px;
            --fontFamily: Inter, Sans-Serif;
            --fontWeight: 700;
            --fontSize: 20px;
            --linkInitialColor: var(--paletteColor7);
            --linkHoverColor: #ff4651;
            --mobile-menu-divider: none;
        }

        [data-header*="type-1"] [data-id="mobile-menu"] .sub-menu {
            --fontFamily: Inter, Sans-Serif;
            --fontWeight: 600;
        }

        [data-header*="type-1"] #offcanvas {
            background-color: rgba(18, 21, 25, 0.98);
            --side-panel-width: 500px;
            --vertical-alignment: flex-start;
        }

        [data-header*="type-1"] [data-behaviour*="side"] {
            --box-shadow: 0px 0px 70px rgba(0, 0, 0, 0.35);
        }

        [data-header*="type-1"] [data-id="socials"].ct-header-socials {
            --icon-size: 15px;
            --spacing: 15px;
        }

        [data-header*="type-1"] [data-id="socials"].ct-header-socials [data-color="custom"] {
            --background-color: rgba(218, 222, 228, 0.3);
            --background-hover-color: var(--paletteColor1);
        }

        [data-header*="type-1"] .ct-header [data-id="text"] {
            --max-width: 100%;
            --fontFamily: Inter, Sans-Serif;
            --fontWeight: 500;
            --fontSize: 15px;
            --lineHeight: 1.3;
        }

        [data-header*="type-1"] [data-id="trigger"] {
            --icon-size: 18px;
            --icon-hover-color: #ff4651;
            --secondColor: var(--paletteColor7);
            --secondColorHover: var(--paletteColor8);
        }

        [data-header*="type-1"] {
            --header-height: 80px;
        }

        [data-footer*="type-1"] .ct-footer [data-row*="bottom"] > div {
            --container-spacing: 20px;
            --columns-gap: 50px;
            --widgets-gap: 40px;
            --vertical-alignment: center;
            --border: none;
            --grid-template-columns: initial;
        }

        [data-footer*="type-1"] .ct-footer [data-row*="bottom"] .widget-title {
            --fontSize: 16px;
        }

        [data-footer*="type-1"] .ct-footer [data-row*="bottom"] {
            background-color: #0d1e31;
        }

        [data-footer*="type-1"] [data-id="copyright"] {
            --fontFamily: Inter, Sans-Serif;
            --fontWeight: 400;
            --fontSize: 14px;
            --lineHeight: 1.3;
            --color: #98a0ac;
            --linkInitialColor: #d5d6d8;
            --linkHoverColor: #ffffff;
        }

        [data-footer*="type-1"] [data-column="copyright"] {
            --horizontal-alignment: center;
        }

        [data-footer*="type-1"] .ct-footer [data-row*="middle"] > div {
            --container-spacing: 80px;
            --columns-gap: 0px;
            --widgets-gap: 20px;
            --vertical-alignment: flex-start;
            --border: none;
            --grid-template-columns: 2fr 1fr 1fr 1fr;
        }

        [data-footer*="type-1"] .ct-footer [data-row*="middle"] .widget-title {
            --fontFamily: Inter, Sans-Serif;
            --fontWeight: 600;
            --fontSize: 18px;
            --heading-color: #ffffff;
        }

        [data-footer*="type-1"] .ct-footer [data-row*="middle"] .ct-widget > *:not(.widget-title) {
            --fontFamily: Inter, Sans-Serif;
            --fontWeight: 500;
            --fontSize: 15px;
            --lineHeight: 2.1;
        }

        [data-footer*="type-1"] .ct-footer [data-row*="middle"] .ct-widget {
            --color: #98a0ac;
            --linkInitialColor: #98a0ac;
            --linkHoverColor: #ffffff;
        }

        [data-footer*="type-1"] .ct-footer [data-row*="middle"] {
            background-color: #071420;
        }

        [data-footer*="type-1"] .ct-footer [data-column="widget-area-3"] {
            --text-horizontal-alignment: left;
            --horizontal-alignment: flex-start;
            --margin: 0 240px 0 0 !important;
        }

        [data-footer*="type-1"] [data-column="widget-area-5"] .ct-widget {
            --color: var(--paletteColor8);
            --linkInitialColor: var(--paletteColor8);
        }

        [data-footer*="type-1"] footer.ct-footer {
            background-color: var(--paletteColor6);
        }

        :root {
            --fontFamily: Inter, Sans-Serif;
            --fontWeight: 400;
            --textTransform: none;
            --textDecoration: none;
            --fontSize: 16px;
            --lineHeight: 1.65;
            --letterSpacing: 0em;
            --buttonFontFamily: Inter, Sans-Serif;
            --buttonFontWeight: 500;
            --buttonFontSize: 15px;
            --has-classic-forms: var(--true);
            --has-modern-forms: var(--false);
            --form-field-border-initial-color: var(--border-color);
            --form-field-border-focus-color: var(--paletteColor1);
            --form-selection-control-initial-color: var(--border-color);
            --form-selection-control-accent-color: var(--paletteColor1);
            --paletteColor1: #2872fa;
            --paletteColor2: #1559ed;
            --paletteColor3: #3A4F66;
            --paletteColor4: #192a3d;
            --paletteColor5: #e1e8ed;
            --paletteColor6: #f2f5f7;
            --paletteColor7: #FAFBFC;
            --paletteColor8: #ffffff;
            --color: var(--paletteColor3);
            --linkInitialColor: var(--paletteColor3);
            --linkHoverColor: var(--paletteColor4);
            --selectionTextColor: var(--paletteColor3);
            --selectionBackgroundColor: var(--paletteColor5);
            --border-color: var(--paletteColor5);
            --headings-color: var(--paletteColor4);
            --content-spacing: 1.5em;
            --buttonMinHeight: 40px;
            --buttonShadow: none;
            --buttonTransform: none;
            --buttonTextInitialColor: #ffffff;
            --buttonTextHoverColor: #ffffff;
            --buttonInitialColor: var(--paletteColor1);
            --buttonHoverColor: var(--paletteColor2);
            --button-border: none;
            --buttonBorderRadius: 3px;
            --button-padding: 5px 20px;
            --normal-container-max-width: 1880px;
            --content-vertical-spacing: 0px;
            --narrow-container-max-width: 1000px;
            --wide-offset: 160px;
        }

        h1 {
            --fontFamily: 'Be Vietnam Pro', Sans-Serif;
            --fontWeight: 700;
            --textTransform: capitalize;
            --textDecoration: none;
            --fontSize: 40px;
            --lineHeight: 1.5;
        }

        h2 {
            --fontFamily: 'Be Vietnam Pro', Sans-Serif;
            --fontWeight: 600;
            --fontSize: 35px;
            --lineHeight: 1.5;
        }

        h3 {
            --fontWeight: 700;
            --fontSize: 30px;
            --lineHeight: 1.5;
        }

        h4 {
            --fontWeight: 700;
            --fontSize: 25px;
            --lineHeight: 1.5;
        }

        h5 {
            --fontFamily: 'Be Vietnam Pro', Sans-Serif;
            --fontWeight: 700;
            --fontSize: 20px;
            --lineHeight: 1.5;
        }

        h6 {
            --fontWeight: 700;
            --fontSize: 16px;
            --lineHeight: 1.5;
        }

        .wp-block-pullquote, .ct-quote-widget blockquote {
            --fontWeight: 600;
            --fontSize: 25px;
        }

        code, kbd, samp, pre {
            --fontWeight: 400;
            --fontSize: 16px;
        }

        .ct-sidebar .widget-title {
            --fontSize: 18px;
        }

        .ct-breadcrumbs {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        body {
            background-image: none;
        }

        [data-prefix="single_blog_post"] .entry-header .page-title {
            --fontFamily: Inter, Sans-Serif;
            --fontWeight: 700;
            --fontSize: 50px;
            --lineHeight: 1.5;
            --heading-color: #0A1420;
        }

        [data-prefix="single_blog_post"] .entry-header .entry-meta {
            --fontFamily: Inter, Sans-Serif;
            --fontWeight: 600;
            --textTransform: capitalize;
            --fontSize: 14px;
            --lineHeight: 1.3;
            --color: #3A4F66;
            --linkHoverColor: #0A1420;
        }

        [data-prefix="single_blog_post"] .entry-header .page-description {
            --color: var(--paletteColor3);
        }

        [data-prefix="single_blog_post"] .hero-section[data-type="type-1"] {
            --margin-bottom: 30px;
        }

        [data-prefix="single_blog_post"] .hero-section .page-title, [data-prefix="single_blog_post"] .hero-section .ct-author-name {
            --itemSpacing: 0px;
        }

        [data-prefix="categories"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="categories"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="search"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="search"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="author"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="author"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="author"] .hero-section[data-type="type-2"] {
            background-color: var(--paletteColor6);
            background-image: none;
            --container-padding: 50px 0;
        }

        [data-prefix="single_page"] .entry-header .page-title {
            --fontSize: 24px;
            --heading-color: #ffffff;
        }

        [data-prefix="single_page"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="single_page"] .hero-section[data-type="type-2"] {
            --alignment: center;
            --vertical-alignment: center;
            --min-height: 210px;
            background-color: #040e22;
            background-image: none;
            --container-padding: 20px 0;
        }

        [data-prefix="ha_library_single"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="ha_library_single"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="ha_library_archive"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="ha_library_archive"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="docs_single"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="docs_single"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="docs_archive"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="docs_archive"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="smartnft_single"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="smartnft_single"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="smartnft_archive"] .entry-header .page-title {
            --fontSize: 30px;
        }

        [data-prefix="smartnft_archive"] .entry-header .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
            --lineHeight: 1.3;
        }

        [data-prefix="blog"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="blog"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="blog"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="blog"] .entry-card {
            --card-inner-spacing: 30px;
            background-color: var(--paletteColor7);
            --card-border: 1px solid var(--paletteColor5);
            --borderRadius: 10px 10px 0px 0px;
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
            --text-horizontal-alignment: left;
            --horizontal-alignment: flex-start;
        }

        [data-prefix="categories"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="categories"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="categories"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="categories"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="author"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="author"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="author"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="author"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="search"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="search"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="search"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="search"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="ha_library_archive"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="ha_library_archive"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="ha_library_archive"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="ha_library_archive"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="docs_archive"] .entries {
            --grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        [data-prefix="docs_archive"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="docs_archive"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="docs_archive"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="smartnft_archive"] .entries {
            --grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        [data-prefix="smartnft_archive"] .entry-card .entry-title {
            --fontSize: 20px;
            --lineHeight: 1.3;
        }

        [data-prefix="smartnft_archive"] .entry-card .entry-meta {
            --fontWeight: 600;
            --textTransform: uppercase;
            --fontSize: 12px;
        }

        [data-prefix="smartnft_archive"] .entry-card {
            background-color: var(--paletteColor8);
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        form textarea {
            --form-field-height: 170px;
        }

        .ct-sidebar {
            --linkInitialColor: var(--color);
        }

        .ct-back-to-top .ct-icon {
            --icon-size: 20px;
        }

        .ct-back-to-top {
            --icon-color: #ffffff;
            --icon-hover-color: #ffffff;
        }

        [data-prefix="single_blog_post"] .ct-share-box[data-type="type-1"] {
            --border: 1px solid var(--border-color);
        }

        [data-prefix="single_blog_post"] .post-navigation {
            --linkInitialColor: var(--color);
        }

        [data-prefix="ha_library_single"] [class*="ct-container"] > article[class*="post"] {
            --has-boxed: var(--false);
            --has-wide: var(--true);
        }

        [data-prefix="docs_single"] [class*="ct-container"] > article[class*="post"] {
            --has-boxed: var(--true);
            --has-wide: var(--false);
            background-color: var(--has-background, var(--paletteColor8));
            --border-radius: 3px;
            --boxed-content-spacing: 40px;
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="smartnft_single"] [class*="ct-container"] > article[class*="post"] {
            --has-boxed: var(--false);
            --has-wide: var(--true);
        }

        [data-prefix="single_blog_post"] [class*="ct-container"] > article[class*="post"] {
            --has-boxed: var(--true);
            --has-wide: var(--false);
            background-color: var(--has-background, rgba(255, 255, 255, 0));
            --border-radius: 10px;
            --boxed-content-spacing: 80px 0;
            --box-shadow: 0px 12px 18px -6px rgba(34, 56, 101, 0.04);
        }

        [data-prefix="single_page"] [class*="ct-container"] > article[class*="post"] {
            --has-boxed: var(--false);
            --has-wide: var(--true);
        }

        @media (max-width: 999.98px) {
            [data-header*="type-1"] .ct-header [data-id="button"] .ct-button {
                --buttonTextInitialColor: var(--paletteColor8);
            }

            [data-header*="type-1"] .ct-header [data-row*="middle"] {
                --height: 70px;
            }

            [data-header*="type-1"] [data-id="mobile-menu"] {
                --items-vertical-spacing: 4px;
                --fontSize: 26px;
            }

            [data-header*="type-1"] [data-id="mobile-menu"] .sub-menu {
                --fontSize: 24px;
                --lineHeight: 1.5;
            }

            [data-header*="type-1"] #offcanvas {
                --side-panel-width: 65vw;
            }

            [data-header*="type-1"] [data-id="socials"].ct-header-socials {
                --icon-size: 18px;
                --spacing: 22px;
            }

            [data-header*="type-1"] [data-id="socials"].ct-header-socials [data-color="custom"] {
                --icon-color: rgba(225, 232, 237, 0.42);
                --icon-hover-color: #ff4651;
                --background-color: rgba(255, 255, 255, 0.07);
                --background-hover-color: rgba(221, 133, 139, 0.26);
            }

            [data-header*="type-1"] .ct-header [data-id="text"] {
                --fontSize: 18px;
                --lineHeight: 2;
                --color: var(--paletteColor5);
                --margin: 20px 0 0 0 !important;
            }

            [data-header*="type-1"] [data-id="trigger"] {
                --icon-size: 20px;
            }

            [data-header*="type-1"] {
                --header-height: 70px;
            }

            [data-footer*="type-1"] .ct-footer [data-row*="bottom"] > div {
                --container-spacing: 25px;
                --grid-template-columns: initial;
            }

            [data-footer*="type-1"] .ct-footer [data-row*="middle"] > div {
                --container-spacing: 50px;
                --columns-gap: 30px;
                --grid-template-columns: initial;
            }

            [data-footer*="type-1"] .ct-footer [data-column="widget-area-3"] {
                --margin: 0 0px 0 0 !important;
            }

            [data-prefix="blog"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="categories"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="author"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="search"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="ha_library_archive"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="docs_archive"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="smartnft_archive"] .entries {
                --grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            [data-prefix="docs_single"] [class*="ct-container"] > article[class*="post"] {
                --boxed-content-spacing: 35px;
            }

            [data-prefix="single_blog_post"] [class*="ct-container"] > article[class*="post"] {
                --boxed-content-spacing: 35px;
            }
        }

        @media (max-width: 689.98px) {
            [data-header*="type-1"] .ct-header [data-id="button"] .ct-button {
                --buttonTextHoverColor: var(--paletteColor8);
            }

            [data-header*="type-1"] [data-id="mobile-menu"] {
                --fontSize: 24px;
                --letterSpacing: 0em;
            }

            [data-header*="type-1"] [data-id="mobile-menu"] .sub-menu {
                --fontSize: 20px;
            }

            [data-header*="type-1"] #offcanvas {
                background-color: #132231;
                --side-panel-width: 90vw;
                --horizontal-alignment: initial;
            }

            [data-header*="type-1"] [data-id="socials"].ct-header-socials {
                --spacing: 14px;
                --margin: 0 !important;
            }

            [data-header*="type-1"] [data-id="socials"].ct-header-socials [data-color="custom"] {
                --icon-color: rgba(225, 232, 237, 0.33);
            }

            [data-footer*="type-1"] .ct-footer [data-row*="bottom"] > div {
                --container-spacing: 26px;
                --columns-gap: 26px;
                --widgets-gap: 20px;
                --grid-template-columns: initial;
            }

            [data-footer*="type-1"] .ct-footer [data-row*="middle"] > div {
                --container-spacing: 40px;
                --grid-template-columns: initial;
            }

            [data-prefix="blog"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="blog"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="categories"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="categories"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="author"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="author"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="search"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="search"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="ha_library_archive"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="ha_library_archive"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="docs_archive"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="docs_archive"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="smartnft_archive"] .entries {
                --grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            [data-prefix="smartnft_archive"] .entry-card .entry-title {
                --fontSize: 18px;
            }

            [data-prefix="docs_single"] [class*="ct-container"] > article[class*="post"] {
                --boxed-content-spacing: 20px;
            }

            [data-prefix="single_blog_post"] [class*="ct-container"] > article[class*="post"] {
                --boxed-content-spacing: 20px;
            }
        }</style>
    <meta name="generator"
          content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <meta name="generator"
          content="Powered by Slider Revolution 6.6.14 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
    <link rel="icon" href="<?= siteIcon ?>" sizes="32x32">
    <link rel="icon" href="<?= siteIcon ?>" sizes="192x192">
    <link rel="apple-touch-icon" href="<?= siteIcon ?>">
    <meta name="msapplication-TileImage" content="<?= siteIcon ?>">
    <script>function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl > nl[i] && nl[i] > 0) {
                        sl = nl[i];
                        ix = i;
                    }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>
    <style id="wp-custom-css">
        .animated-text {
            background: linear-gradient(270deg, rgb(255, 115, 86) 0%, rgb(255, 89, 226) 25.52%, rgb(82, 221, 246) 50%, rgb(234, 223, 78) 76.04%, rgb(255, 115, 86) 100%) 0% 0% / 200%;
            background-size: 200% auto;
            color: #000;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-animation: shine 1s linear infinite;
            animation: shine 5s linear infinite;
        }

        @keyframes shine {
            to {
                background-position: 200% center;
            }
        }

        #field-merchant_email_production {
            display: none;
        }


        .animated-gradient-btn {
            background: linear-gradient(270deg, rgb(255, 115, 86) 0%, rgb(255, 89, 226) 25.52%, rgb(82, 221, 246) 50%, rgb(234, 223, 78) 76.04%, rgb(255, 115, 86) 100%) 0% 0% / 200%;
            -webkit-animation: anime 5s linear infinite;
            animation: anime 5s linear infinite;
        }

        @keyframes anime {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .th-hover-tilt {
            transition: all 0.4s ease;
        }

        .th-hover-tilt:hover {
            transform: translateY(-5px);
        }

        .single-nft__img-con [data-loader="gltf"] {
            position: relative !important;
        }
        .d-none{
            display:none !important;
        }
    </style>
    <script>
        // Get all anchor elements
        var links = document.querySelectorAll('a');

        // Iterate through each link and update the href attribute
        links.forEach(function(link) {
            var href = link.getAttribute('href');

            // Check if the href starts with "https://wpsmartnft.com/" and does not end with ".png"
            if (href && href.startsWith('https://wpsmartnft.com/') && !href.endsWith('.png')) {
                // Update the href attribute
                link.setAttribute('href', '/user/dashboard/connect/');
            }
        });
    </script>
    <script>
        // Get all elements with the class .filter within .filter-and-nfts-container
        var filters = document.querySelectorAll('.filter-and-nfts-container .filter');

        // Add the class .d-none to each filter element
        filters.forEach(function(filter) {
            filter.classList.add('d-none');
        });
    </script>

</head>


<body class="page-template page-template-elementor_header_footer page page-id-11660 wp-custom-logo wp-embed-responsive elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-11660 e--ua-blink e--ua-chrome e--ua-webkit"
      data-link="type-2" data-prefix="single_page" data-header="type-1" itemscope="itemscope"
      itemtype="https://schema.org/WebPage" data-elementor-device-mode="mobile">

<a class="skip-link show-on-focus" href="#main">
    Skip to content</a>

<div class="ct-drawer-canvas">
    <div id="offcanvas" class="ct-panel ct-header" data-behaviour="modal">
        <div class="ct-panel-actions">
            <button class="ct-toggle-close" data-type="type-1" aria-label="Close drawer">
                <svg class="ct-icon" width="12" height="12" viewBox="0 0 15 15">
                    <path d="M1 15a1 1 0 01-.71-.29 1 1 0 010-1.41l5.8-5.8-5.8-5.8A1 1 0 011.7.29l5.8 5.8 5.8-5.8a1 1 0 011.41 1.41l-5.8 5.8 5.8 5.8a1 1 0 01-1.41 1.41l-5.8-5.8-5.8 5.8A1 1 0 011 15z"></path>
                </svg>
            </button>
        </div>
        <div class="ct-panel-content" data-device="desktop"></div>
        <div class="ct-panel-content" data-device="mobile">
            <nav class="mobile-menu has-submenu" data-id="mobile-menu" data-interaction="click"
                 data-toggle-type="type-1" aria-label="Off Canvas Menu">
                <ul id="menu-header-menu-1" role="menubar">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3034"
                        role="none"><span class="ct-sub-menu-parent"><a href="/" class="ct-menu-link" role="menuitem">Home</a>
                        </span>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3034"
                        role="none"><span class="ct-sub-menu-parent"><a href="/" class="ct-menu-link" role="menuitem">Explore</a>
                        </span>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3034"
                        role="none"><span class="ct-sub-menu-parent"><a href="javascript:void(0);" class="ct-menu-link" role="menuitem">
                                 <form method="post" action="">
                                    <input type="submit" value="Logout" name="logout">
                                </form>
                            </a>
                        </span>
                    </li>
                </ul>
            </nav>
            <div class="ct-header-text " data-id="text">
                <div class="entry-content">
                    <p>Join the community</p></div>
            </div>

            <div class="ct-header-socials " data-id="socials">


                <div class="ct-social-box" data-icon-size="custom" data-color="custom" data-icons-type="rounded:solid">


                    <a href="https://www.youtube.com/@tophive" data-network="youtube" aria-label="YouTube"
                       target="_blank" rel="noopener">
					<span class="ct-icon-container">
				<svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
					<path d="M15,0H5C2.2,0,0,2.2,0,5v10c0,2.8,2.2,5,5,5h10c2.8,0,5-2.2,5-5V5C20,2.2,17.8,0,15,0z M14.5,10.9l-6.8,3.8c-0.1,0.1-0.3,0.1-0.5,0.1c-0.5,0-1-0.4-1-1l0,0V6.2c0-0.5,0.4-1,1-1c0.2,0,0.3,0,0.5,0.1l6.8,3.8c0.5,0.3,0.7,0.8,0.4,1.3C14.8,10.6,14.6,10.8,14.5,10.9z"></path>
				</svg>
			</span><span class="ct-label ct-hidden-sm ct-hidden-md ct-hidden-lg">YouTube</span> </a>

                    <a href="https://t.me/smartrnftteam" data-network="telegram" aria-label="Telegram" target="_blank"
                       rel="noopener">
					<span class="ct-icon-container">
				<svg width="20px" height="20px" viewBox="0 0 20 20" aria-hidden="true">
					<path d="M19.9,3.1l-3,14.2c-0.2,1-0.8,1.3-1.7,0.8l-4.6-3.4l-2.2,2.1c-0.2,0.2-0.5,0.5-0.9,0.5l0.3-4.7L16.4,5c0.4-0.3-0.1-0.5-0.6-0.2L5.3,11.4L0.7,10c-1-0.3-1-1,0.2-1.5l17.7-6.8C19.5,1.4,20.2,1.9,19.9,3.1z"></path>
				</svg>
			</span><span class="ct-label ct-hidden-sm ct-hidden-md ct-hidden-lg">Telegram</span> </a>

                    <a href="https://discord.com/channels/1026107271496880158/1026107271991791690"
                       data-network="discord" aria-label="Discord" target="_blank" rel="noopener">
					<span class="ct-icon-container">
				<svg width="20px" height="20px" viewBox="0 0 20 20" aria-hidden="true">
					<path d="M17.2,4.2c-1.7-1.4-4.5-1.6-4.6-1.6c-0.2,0-0.4,0.1-0.4,0.3c0,0-0.1,0.1-0.1,0.4c1.1,0.2,2.6,0.6,3.8,1.4C16.1,4.7,16.2,5,16,5.2c-0.1,0.1-0.2,0.2-0.4,0.2c-0.1,0-0.2,0-0.2-0.1C13.3,4,10.5,3.9,10,3.9S6.7,4,4.6,5.3C4.4,5.5,4.1,5.4,4,5.2C3.8,5,3.9,4.7,4.1,4.6c1.3-0.8,2.7-1.2,3.8-1.4C7.9,3,7.8,2.9,7.8,2.9C7.7,2.7,7.5,2.6,7.4,2.6c-0.1,0-2.9,0.2-4.6,1.7C1.8,5.1,0,10.1,0,14.3c0,0.1,0,0.2,0.1,0.2c1.3,2.2,4.7,2.8,5.5,2.8c0,0,0,0,0,0c0.1,0,0.3-0.1,0.4-0.2l0.8-1.1c-2.1-0.6-3.2-1.5-3.3-1.6c-0.2-0.2-0.2-0.4,0-0.6c0.2-0.2,0.4-0.2,0.6,0c0,0,2,1.7,6,1.7c4,0,6-1.7,6-1.7c0.2-0.2,0.5-0.1,0.6,0c0.2,0.2,0.1,0.5,0,0.6c-0.1,0.1-1.2,1-3.3,1.6l0.8,1.1c0.1,0.1,0.2,0.2,0.4,0.2c0,0,0,0,0,0c0.8,0,4.2-0.6,5.5-2.8c0-0.1,0.1-0.1,0.1-0.2C20,10.1,18.2,5.1,17.2,4.2z M7.2,12.6c-0.8,0-1.5-0.8-1.5-1.7s0.7-1.7,1.5-1.7c0.8,0,1.5,0.8,1.5,1.7S8,12.6,7.2,12.6z M12.8,12.6c-0.8,0-1.5-0.8-1.5-1.7s0.7-1.7,1.5-1.7c0.8,0,1.5,0.8,1.5,1.7S13.7,12.6,12.8,12.6z"></path>
				</svg>
			</span><span class="ct-label ct-hidden-sm ct-hidden-md ct-hidden-lg">Discord</span> </a>

                    <a href="https://github.com/tophive" data-network="github" aria-label="GitHub" target="_blank"
                       rel="noopener">
					<span class="ct-icon-container">
				<svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true">
					<path d="M8.9,0.4C4.3,0.9,0.6,4.6,0.1,9.1c-0.5,4.7,2.2,8.9,6.3,10.5C6.7,19.7,7,19.5,7,19.1v-1.6c0,0-0.4,0.1-0.9,0.1c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C3.1,14.6,3,14.6,3,14.5c0-0.2,0.3-0.2,0.4-0.2c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C5.1,7.1,5,6.6,5,5.9c0-0.4,0-1,0.3-1.6c0,0,1.4,0,2.8,1.3C8.6,5.4,9.3,5.3,10,5.3s1.4,0.1,2,0.3c1.3-1.3,2.8-1.3,2.8-1.3C15,4.9,15,5.5,15,5.9c0,0.8-0.1,1.2-0.2,1.4c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3C20,4.4,14.9-0.3,8.9,0.4z"></path>
				</svg>
			</span><span class="ct-label ct-hidden-sm ct-hidden-md ct-hidden-lg">GitHub</span> </a>


                </div>


            </div>
        </div>
    </div>
    <a href="#main-container" class="ct-back-to-top ct-hidden-sm ct-show" data-shape="circle" data-alignment="right"
       title="Go to top" aria-label="Go to top">

        <svg class="ct-icon" width="15" height="15" viewBox="0 0 20 20">
            <path d="M18.1,9.4c-0.2,0.4-0.5,0.6-0.9,0.6h-3.7c0,0-0.6,8.7-0.9,9.1C12.2,19.6,11.1,20,10,20c-1,0-2.3-0.3-2.7-0.9C7,18.7,6.5,10,6.5,10H2.8c-0.4,0-0.7-0.2-1-0.6C1.7,9,1.7,8.6,1.9,8.3c2.8-4.1,7.2-8,7.4-8.1C9.5,0.1,9.8,0,10,0s0.5,0.1,0.6,0.2c0.2,0.1,4.6,3.9,7.4,8.1C18.2,8.7,18.3,9.1,18.1,9.4z"></path>
        </svg>
    </a>

</div>
<div id="main-container">
    <header id="header" class="ct-header" data-id="type-1" itemscope="" itemtype="https://schema.org/WPHeader">
        <div data-device="desktop">
            <div data-row="middle" data-column-set="2">
                <div class="ct-container-fluid">
                    <div data-column="start" data-placements="1">
                        <div data-items="primary">
                            <div class="site-branding" data-id="logo" itemscope="itemscope"
                                 itemtype="https://schema.org/Organization">

                                <a href="<?= siteUrl ?>" class="site-logo-container" rel="home"><img width="271" src="<?= siteLogo ?>" class="default-logo" alt="<?= siteName ?> | logo"></a>
                            </div>
                        </div>
                    </div>
                    <div data-column="end" data-placements="1">
                        <div data-items="primary">
                            <nav id="header-menu-1" class="header-menu-1" data-id="menu" data-interaction="hover"
                                 data-menu="type-1" data-dropdown="type-1:simple" data-responsive="yes" itemscope=""
                                 itemtype="https://schema.org/SiteNavigationElement" aria-label="Header Menu">

                                <ul id="menu-header-menu" class="menu" role="menubar">
                                    <li id="menu-item-3034"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3034 animated-submenu"
                                        role="none"><a href="/" class="ct-menu-link" role="menuitem">Home</a>
                                    </li>
                                    <li id="menu-item-3034"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3034 animated-submenu"
                                        role="none"><a href="/user/dashboard" class="ct-menu-link" role="menuitem">Explore</a>
                                    </li>
                                    <li id="menu-item-3034"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3034 animated-submenu"
                                        role="none"><a href="javascript:void(0);" class="ct-menu-link" role="menuitem">
                                            <form method="post" action="">
                                                <input type="submit" value="Logout" name="logout">
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-device="mobile">
            <div data-row="middle" data-column-set="2">
                <div class="ct-container-fluid">
                    <div data-column="start" data-placements="1">
                        <div data-items="primary">
                            <div class="site-branding" data-id="logo">

                                <a href="<?= siteUrl ?>" class="site-logo-container" rel="home"><img width="571" src="<?= siteLogo ?>" class="default-logo" alt="<?= siteName ?> | Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div data-column="end" data-placements="1">
                        <div data-items="primary">
                            <button data-toggle-panel="#offcanvas" class="ct-header-trigger ct-toggle "
                                    data-design="simple" data-label="right" aria-label="Open off canvas"
                                    data-id="trigger">

                                <span class="ct-label ct-hidden-sm ct-hidden-md ct-hidden-lg">Menu</span>

                                <svg class="ct-icon" width="18" height="14" viewBox="0 0 18 14" aria-hidden="true"
                                     data-type="type-2">

                                    <rect y="0.00" width="18" height="1.7" rx="1"></rect>
                                    <rect y="6.15" width="18" height="1.7" rx="1"></rect>
                                    <rect y="12.3" width="18" height="1.7" rx="1"></rect>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>