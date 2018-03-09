(function ($) {
    $.fn.jkqRoll = function (options) {
       
        $.fn.jkqRoll.defaultPara = {
            type: "fade",   //fade ����
            autoPlay: true,   //�Ƿ��Զ�����
            autoRandom: false,  //�Ƿ��������
            isBg: false,   //�Ƿ��Ǳ����ֲ�
            isRollTitle: true,    //�Ƿ��Զ���ʾ�ֲ�����
            conTime: 1000, //Ч������ʱ��
            autoTime: 3000, //�Զ����м�� ��typeΪ�޷������ʱ�� �൱�������ٶȡ�
            defaultIndex: 0, //Ĭ�ϵĵ�ǰλ������ 0�ǵ�һ��
            moveNum: 1,   //ÿ���ƶ�����
            moveRange: 590,  //ÿ���ƶ�����
            rollTitle: ".RollTit ul",
            titleSelectClass: "select", //��ǰѡ�����Ӧ��class����
            rollCon: ".RollCon ul",
            leftCell: ".leftArrow",    //��߰�ť
            rightCell: ".rightArrow",    //�ұ߰�ť
            trigger: "mouseover"    //������ʽ
        }
        return this.each(function () {
            var opts = $.extend({}, $.fn.jkqRoll.defaultPara, options);
            var index = opts.defaultIndex;
            var rollTitle = $(opts.rollTitle, $(this));
            var rollBox = $(opts.rollCon, $(this));
            var rollBoxSize = rollBox.children().size() / opts.moveNum;
            var leftBtn = $(opts.leftCell, $(this));
            var rightBtn = $(opts.rightCell, $(this));
            var interval = null;
            var autoPlay = opts.autoPlay;
            var moveRange = opts.moveRange * opts.moveNum;

            //alert(rollBoxSize);

            var GetRandomNum = function (Min, Max) {
                var Range = Max - Min;
                var Rand = Math.random();
                return (Min + Math.round(Rand * Range));
            }

            rollTitle.html("");
            for (var i = 1; i <= rollBoxSize; i++) {
                rollTitle.append("<li" + (i == 1 ? " class=\"select\"" : "") + ">" + (opts.isRollTitle ? i.toString() : "") + "</li>");
            }

            if (opts.isBg) {
                var img = null;
                rollBox.children().each(function () {
                    img = $(this).find("img");
                    $(this).find("a").css({ "background": "url(" + img.attr("src") + ") no-repeat top center", "display": "block", " width": "100%", "height": img.height() });
                    img.remove();
                });
            }
            switch (opts.type) {
                case "left":
                    rollBox.wrap('<div style="overflow:hidden;width:' + moveRange + 'px;position:relative;"></div>').
                        css({ "width": (moveRange * rollBoxSize) + "px", "overflow": "hidden", "padding": "0", "margin": "0", "position": "relative" }).
                        children().css({ "float": "left", "width": opts.moveRange + "px" });
                    break;
                case "top":
                    rollBox.wrap('<div style="overflow:hidden;position:relative;height:' + moveRange + 'px;"></div>').
                        css({ "padding": "0", "margin": "0", "position": "relative" }).
                        children().css({ "height": "" + moveRange + "px" });
                    break;
                default:
                    break;
            }

            var Plays = function () {
                if (opts.autoRandom) {
                    var random = GetRandomNum(0, rollBoxSize - 1);
                    if (random == index)
                        index = random++;
                    else
                        index = random;
                }
                if (index >= rollBoxSize) {
                    index = 0;
                } else if (index < 0) {
                    index = rollBoxSize - 1;
                }

                switch (opts.type) {
                    case "fade":
                        rollBox.children().stop(true, true).eq(index).fadeIn(opts.conTime).siblings().hide();
                        break;
                    case "left":
                        rollBox.stop(true, false).animate({ "left": parseInt(-index) * moveRange }, opts.conTime);
                        break;
                    case "top":
                        rollBox.stop(true, false).animate({ "top": parseInt(-index) * moveRange }, opts.conTime);
                        break;
                    default:
                        break;
                }
                rollTitle.children().removeClass(opts.titleSelectClass).eq(index).addClass(opts.titleSelectClass);
            }
            //��ʼ��
            Plays();
            //�Ƿ��Զ�ѭ�� 
            if (autoPlay) {
                interval = setInterval(function () { index++; Plays() }, opts.autoTime);

                $(this).hover(function () {
                    if (autoPlay) {
                        clearInterval(interval);
                    }
                }, function () {
                    if (autoPlay) {
                        clearInterval(interval);
                        interval = setInterval(function () { index++; Plays() }, opts.autoTime);
                    }
                });
            }
            //����¼�
            var mst;
            if (opts.trigger == "mouseover") {
                rollTitle.children().hover(function () {
                    clearTimeout(mst); index = rollTitle.children().index(this); mst = window.setTimeout(Plays, 200);
                }, function () { if (!mst) clearTimeout(mst); });
                leftBtn.mouseover(function () { index--; Plays(); });
                rightBtn.mouseover(function () { index++; Plays(); });
            } else {
                rollTitle.children().click(function () { index = rollTitle.children().index(this); Plays(); });
                leftBtn.click(function () { index--; Plays(); });
                rightBtn.click(function () { index++; Plays(); });
            }
        });
    };
})(jQuery);