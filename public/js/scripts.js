function buildUrl() {
    var url = $('input[name="baseUrl"]').val();
    for (var item in arguments)
        url += arguments[item] + '/';
    return url;
}
