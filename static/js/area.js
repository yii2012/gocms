/**
 * @param string url 请求的url 
 * @param int parentId 选择的地区area_id号
 * @param int parentId 下一个待控制的页面ID
 * @param int areaNum 当前省市区编号（一个页面有多个省市区时区分）
 * @param string selectTip 选择下拉框的提示信息
 * @param string selectExtend select的附加信息
 */
function getAreaList(url, parentId, nextPlaceId, areaNum, selectTip, selectExtend) {
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            parent_id: parentId,
            area_num: areaNum,
            select_tip: selectTip,
            select_extend: selectExtend
        },
        dataType: 'json',
        success: function(data) {
            if (data.error_num != 0) {
                alert(data.error_message);
                return false;
            }
            $(nextPlaceId).empty();
            $(nextPlaceId).prepend("<option value=''>==请选择==</option>"); 
            $(nextPlaceId).append(data.content);
            return true;
        },
        error: function() {
            alert('请求失败,请与管理员联系!');
            return false;
        }
    });
}

//获取市
function getCityList(url, parentId) {
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            parent_id: parentId,
        },
        dataType: 'json',
        success: function(data) {
            if (data.error_num != 0) {
                alert(data.error_message);
                return false;
            }
            $('#J_city').empty();
            $('#J_city').prepend("<option value=''>==请选择市==</option>");
            $('#J_city').append(data.content);
            return true;
        },
        error: function() {
            alert('网络传输异常，无法获取地区信息!');
            return false;
        }
    });
}

//获取区
function getCountyList(url, parentId) {
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            parent_id: parentId,
        },
        dataType: 'json',
        success: function(data) {
            if (data.error_num != 0) {
                alert(data.error_message);
                return false;
            }
            console.dir(data);
            $('#J_county').empty();
            $('#J_county').prepend("<option value=''>==请选择区==</option>");
            $('#J_county').append(data.content);
            return true;
        },
        error: function() {
            alert('网络传输异常，无法获取地区信息!');
            return false;
        }
    });
}
