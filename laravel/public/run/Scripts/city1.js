/**
 * Created by jacklin on 17-7-7.
 */
var str = '武昌区江汉区江岸区洪山区硚口区汉阳区江夏区青山区黄陂区东西湖区蔡甸区汉南区新洲区';
var city = {
    wuhan: {
        武昌区: {
            eara: '武昌区',
            blocks: [
                '汉街',
                '积玉桥',
                '中南',
                '徐东',
                '洪山广场',
                '东亭',
                '中北路',
                '宝通寺',
                '首义路',
                '水果湖',
                '丁字桥',
                '傅家坡',
                '司门口',
                '武昌火车站',
                '粮道街',
                '南湖花园',
                '小东门'
            ]

        }
        ,
        江汉区: {
            eara: '江汉区',
            blocks: [
                '万松园',
                '西北湖',
                '唐家墩',
                '新华路',
                '前进/江汉',
                '常青',
                '北湖',
                '杨汊湖',
                '汉口火车站',
                '台北香港路',
                '江汉路'
            ]
        }
        ,
        江岸区: {
            eara: '江岸区',
            blocks: [
                '汉口火车站',
                '台北香港路',
                '江汉路',
                '大智路',
                '建设大道',
                '百步亭',
                '二七路',
                '后湖'
            ]
        }
        ,
        洪山区: {
            eara: '洪山区',
            blocks: [
                '关山',
                '光谷',
                '街道口',
                '珞狮南路',
                '鲁巷',
                '广埠屯',
                '卓刀泉',
                '陈家湾',
                '白沙洲'
            ]
        }
        ,
        硚口区: {
            eara: '硚口区',
            blocks: [
                '汉正街',
                '宗关',
                '崇仁路',
                '宝丰',
                '古田',
                '武胜路'
            ]
        }
        ,
        汉阳区: {
            eara: '汉阳区',
            blocks: [
                '钟家村',
                '王家湾',
                '升官渡',
                '七里庙',
                '鹦鹉',
                '五里墩',
                '郭茨口'
            ]
        }
        ,
        江夏区: {
            eara: '江夏区',
            blocks: [
                '庙山',
                '流芳',
                '金口',
                '藏龙岛',
                '纸坊',
                '东湖高新'
            ]
        }
        ,
        青山区: {
            eara: '青山区',
            blocks: [
                '余家头',
                '建设七路',
                '和平大道',
                '友谊大道',
                '建设二路'
            ]
        }
        ,
        黄陂区: {
            eara: '黄陂区',
            blocks: [
                '汉口北',
                '天河',
                '滠口',
                '祁家湾',
                '盘龙城'
            ]
        }
        ,
        东西湖区: {
            eara: '东西湖区',
            blocks: [
                '常青花园',
                '金银湖',
                '将军路',
                '吴家山'
            ]
        }
        ,
        蔡甸区: {
            eara: '蔡甸区',
            blocks: [
                '蔡甸区'
            ]
        }
        ,
        汉南区: {
            eara: '汉南区',
            blocks: [
                '汉南区'
            ]
        }
        ,
        新洲区: {
            eara: '新洲区',
            blocks: [
                '新洲区'
            ]
        }
    }
};
$(function () {
    var html = '';
    $.each(city.wuhan, function (index, eara) {
        html += '<option data-index="' + index + '" value="' + eara.eara + '">' + eara.eara + '</option>';
    });
    $('.area_select').html(html);



    $('.area_select').change(function () {
        var index = $(':selected', this).data('index');
        console.log(index);
        var temp = '';
        $.each(city.wuhan[index].blocks, function (index, v) {
            temp += '<option>' + v + '</option>';
        });
        $('.block_select').html(temp);
    });
});
