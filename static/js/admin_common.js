function confirmUrl(url, message) {
    if (confirm(message))
        redirect(url);
}

function redirect(url) {
    location.href = url;
}

//滚动条
$(function() {
    $(":text").addClass('input-text');
})

/**
 * 全选checkbox,注意：标识checkbox id固定为为J_checkAll
 * @param string name 列表check名称,如 ids[]
 */
function selectAll(name) {
    if ($("#J_checkAll").attr("checked") == 'checked') {
        $("input[name='" + name + "']").each(function() {
            $(this).attr("checked", "checked");
        });
    } else {
        $("input[name='" + name + "']").each(function() {
            $(this).removeAttr("checked");
        });
    }
}

/**
 *  批量删除时确认提示
 * @param formId jquery选择的标示符
 * @param formActionUrl 提交的地址 
 */
function deleteAll(formId, formActionUrl) {
    $(formId).attr('action', formActionUrl);
    if (confirm('确认删除吗?')) {
        $(formId).submit();
    }
}

function openwinx(url, name, w, h) {
    if (!w)
        w = screen.width - 4;
    if (!h)
        h = screen.height - 95;
    url = url + '&pc_hash=' + pc_hash;
    window.open(url, name, "top=100,left=400,width=" + w + ",height=" + h + ",toolbar=no,menubar=no,scrollbars=yes,resizable=yes,location=no,status=no");
}

//弹出对话框
function omnipotent(id, linkurl, title, close_type, w, h) {
    if (!w)
        w = 700;
    if (!h)
        h = 500;
    art.dialog({id: id, iframe: linkurl, title: title, width: w, height: h, lock: true},
    function() {
        if (close_type == 1) {
            art.dialog({id: id}).close()
        } else {
            var d = art.dialog({id: id}).data.iframe;
            var form = d.document.getElementById('dosubmit');
            form.click();
        }
        return false;
    },
            function() {
                art.dialog({id: id}).close()
            });
    void(0);
}

/**
 * 执行ajax动态加载进来内容里的js
 * @param {type} html
 * @returns {undefined}
 */
function executeScript(html) {
    // 第一步：匹配加载的页面中是否含有js
    var regDetectJs = /<script(.|\n)*?>(.|\n|\r\n)*?<\/script>/ig;
    var jsContained = data.content.match(regDetectJs);

    // 第二步：如果包含js，则一段一段的取出js再加载执行
    if(jsContained) {
        // 分段取出js正则
        var regGetJS = /<script(.|\n)*?>((.|\n|\r\n)*)?<\/script>/im;

        // 按顺序分段执行js
        var jsNums = jsContained.length;
        for (var i=0; i<jsNums; i++) {
            var jsSection = jsContained[i].match(regGetJS);
            if(jsSection[2]) {
                if(window.execScript) {
                    // 给IE的特殊待遇
                    window.execScript(jsSection[2]);
                } else {
                    // 给其他大部分浏览器用的
                    window.eval(jsSection[2]);
                }
            }
        }
    }
} 

function in_array(stringToSearch, arrayToSearch) {
    for (s = 0; s < arrayToSearch.length; s++) {
        thisEntry = arrayToSearch[s].toString();
        if (thisEntry == stringToSearch) {
            return true;
        }
    }
    return false;
}