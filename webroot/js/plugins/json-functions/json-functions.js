
function jsonToOptions(objectJSON)
{
    var _callback = '';
    for(var key in objectJSON)
    {
        _callback += '<option value="' + key + '">' + objectJSON[key] + '</option>';
    }
    return _callback;
}
function jsonToArray(objectJSON)
{
    var _array = [];
    for(var key in objectJSON)
    {
        _array.push({
            id  : key,
            text: objectJSON[key]
        })
    }
    return _array;
}
