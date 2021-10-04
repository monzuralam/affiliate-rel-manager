jQuery(document).ready(function () {
    jQuery(function () {
        var affiliateRelManagerData = affiliateLinkData.affiliateURL;
        var affiliateData = affiliateRelManagerData.split(",");
        affiliateData.pop(',');
        for (var i = 0; i < affiliateData.length; i++) {
            jQuery(affiliateData[i]).attr('rel', 'nofollow sponsored');
        }
    });
});