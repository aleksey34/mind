jQuery(document).on("ready" , function ($) {

    let searchInput = jQuery("#searchform input[name=s]");
    searchInput.on("keyup" , function (event) {
        let search = jQuery(this).val();
        if(search.length < 4) return false;

        let data = {
            s: search ,
            action: "search-ajax" ,
            nonce: ajaxSearchData.nonce
        };

        let ajaxSettings = {
            url: ajaxSearchData.url,
            data: data ,
            type: "POST" ,
            dataType: "json" ,
            beforeSend(xhr){},
            success(data){
               // console.log(data);
                if(data["out"].length > 0){
                    jQuery(".search-result").html(data["out"]);
                }else{
                    let noSearchResultHtml = "<ul class=\"search-result-list\" ><li>Ничего не найдено</li></ul>";
                    jQuery(".search-result").html(noSearchResultHtml);
                }
            }
        };
        jQuery.ajax(ajaxSettings);

    });
});