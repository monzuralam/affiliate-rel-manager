jQuery(document).ready(function () {
    jQuery(function () {
        var affiliateRelManagerData = affiliateLinkData.affiliateURL;
        var affiliateData = affiliateRelManagerData.split(",");
        affiliateData.pop(',');
        for (var i = 0; i < affiliateData.length; i++) {
            if(jQuery(affiliateData[i]).attr('rel', 'nofollow')){
                jQuery(affiliateData[i]).attr('rel', 'nofollow sponsored');
            }else if(jQuery(affiliateData[i]).attr('rel', 'nofollow nofollow')){
                jQuery(affiliateData[i]).attr('rel', 'nofollow sponsored');
            }else{
                jQuery(affiliateData[i]).attr('rel', 'nofollow sponsored');
            }
        }
    });
});