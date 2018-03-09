<?php
?>
<div class="footer_Box">
    <div class="rrb1_footer">
        <table bordercolor="#606060" width="100%" bgcolor="#606060" cellspacing="0" cellpadding="0" style="padding:15px;padding-right:0px;" border="0">
            <tr>
                <td style="font-size:16px" width="140">产品服务</td>
                <td style="font-size:16px" width="140">帮助中心</td>
                <td style="font-size:16px" width="140">新闻资讯</td>
                <td style="font-size:16px" width="140">关于我们</td>
                <!--<td rowspan="4" align="center" width="100"><img src="/static/images/ziliao/webchat.jpg" width="92" height="92" alt=”人人保微信公众号” /></td>-->


                <td rowspan="4" align="left" width="200">
                    <img src="/static/images/zixunbg.png" />
                </td>
            </tr>
            <tr>
                <td><a href="/jiaoshebao">代缴社保</a></td>
                <td><a href="https://www.rrb365.com/news/20161130045119.html">参保流程</a></td>
                <td><a href="/shebaochangshi">公司资讯</a></td>
                <td><a href="/about">关于我们</a></td>
            </tr>
            <tr>
                <td><a href="/jiaogongjijin">缴公积金</a></td>
                <td><a href="https://www.rrb365.com/news/20161130050504.html">停缴流程</a></td>
                <!--<td><a href="/shebaochangshi">行业聚焦</a></td>-->
                <td><a href="https://www.rrb365.com/shebaochangshi/6">政策资讯</a></td>
                <td><a href="/about/dashiji">公司大事记</a></td>
            </tr>
            <tr>
                <td><a href="javascript:;" id="zhengcezixun">政策咨询</a></td>
                <td><a href="#">补差流程</a></td>
                <td><a href="https://www.rrb365.com/shebaochangshi/5">社保常识</a></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><a href="/productLine/index.aspx">产品动态</a></td>
                <td><a href="/about/law">法律声明</a></td>
                <!--<td align="center">微信公众号</td>-->

                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="8" style="font-size: 16px;cursor:pointer;" class="Friendship_link">
                    友情链接  T@manpaer.com:
                    <div style="width: 968px;">
                        <div class="shouye_text1" style="color: #ababab; display: none;">
                            <p style="line-height:25px;" id="FriendshipListDiv">
                                <hr color="#FFFFFF" style="display:block;width:970px;margin-top:10px;margin-bottom:10px;">
                        <?php foreach ($linksList as $links) {?>

                                <a href="<?=$links->link?>" target="_blank" rel="nofollow" title="<?=$links->title?>"><?=$links->title?></a>
                            </li>
                        <?php }?>
                            </p>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

    </div>
    <div class="footer">
        <?php $icp = \common\modelsgii\Config::find()->where(array("name" => "WEB_SITE_ICP"))->one();?>
        <p>copyright&copy1999-<span id="MyYear"></span>  北京鼎信恒通人力资源管理咨询有限公司  版权所有  <?=$icp->value?></p>
        <script>
            //自动获取当前年份，作为结尾年份
            var myDate = new Date();
            var date = document.getElementById("MyYear");
            date.innerHTML = myDate.getFullYear();
        </script>
        <p>
            <img src="/static/images/gs.png" alt="" />
            <img src="/static/images/ind36.gif" style="margin-left: 10px" />
            <img src="/static/images/ind36.png" style="margin-left: 10px" />
            <img src="/static/images/ind361.png" />
            <!--<img src="/static/images/vseal.gif" style="margin-left: 20px" />-->
            <a href="javascript:;" onclick="window.open('https://www.china-seeq.com/index!queryone?qr15.code=200487')">
                <img src="/static/images/shanghai.png" style="margin-left: 20px" />
            </a>
        </p>
    </div>
</div>

<!--侧栏-->
<ul class="cebian_Box" style="z-index:1000;">
    <li>
        <a href="javascript:;"><img src="/static/images/simal_logo_05.png"></a>
        <ul class="cebian_Image1">
            <input type="hidden" value="" id="hidDjsTime" />
            <!--时间-->
            <div class="rrb1_time">
                <div class="rrb1_time1">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="45" colspan="2" align="center" bgcolor="#969696"><strong style=" font-size:24px; color:white" id="monthHzName"></strong></td>
                        </tr>
                        <tr>
                            <td height="40" colspan="2" align="center" style="font-size:20px"><strong>社保办理倒计时</strong></td>
                        </tr>
                        <tr>
                            <td width="76" rowspan="2" align="right" style=" font-size:40px; color:#ff8400"><strong id="djsT">-</strong></td>
                            <td style="font-size:14px; color:#646464" id="djsTime">0时0分0秒</td>
                        </tr>
                        <tr>
                            <td><strong style="font-size:20px;color:#ff8400">天</strong></td>
                        </tr>
                        <tr>
                            <td height="10" colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td height="40" colspan="2">&nbsp;&nbsp;<strong>公告：</strong><a id="ggtitle" href="#" target="_blank">asdfasdf</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--end-->
        </ul>
    </li>
    <li>
        <a href="javascript:;"><img src="/static/images/simal_logo_08.png"></a>
        <ul class="cebian_Image1">
            <!--微信-->
            <div class="rrb1_weixin">
                <div class="rrb1_weixin1">

                    <img src="/static/images/ziliao/dianhua.png" style="width:200px; height:87px; border:none;">
                </div>
            </div>
            <!--ENd-->
        </ul>
    </li>
    <li>
        <a href="javascript:;" style=" background-color:#FFF"><img src="/static/images/simal_logo_17.png" style="border-bottom: 1px solid #e6e6e6; "></a>
        <ul class="cebian_Image1">
            <!-- 计算器结果页添加-->
            <div class="rrb1_jsbox">
                <div class="rrb1_jisuanqi">
                    <div class="jsq" style="background-color:#FFF; width:1026px; height:578px;">
                        <div class="jsq_L" style="background-color:#FFF">
                            <div class="biaoti">社保计算器</div>
                            <div class="jsq_list">
                                <p class="jsq_city">选择城市</p>
                                <input class="select_box" value="选择城市" id="txtCity" readonly="readonly" type="text" style="margin-left: 111px; cursor: pointer;" />
                                <!--选择城市-->
                                <div class="select_city">
                                    <div class="select_city_tab">
                                        <div class="current_1" id="tag_province" style="width:143px;cursor:pointer;"><a href="#" type="p">省份</a></div>
                                        <div class="current_2" id="tag_city" style="width:143px;cursor:pointer"><a href="#" type="c">城市</a></div>
                                    </div>
                                    <div class="select_city_con_wrap">
                                        <div class="select_city_con_actived" type="p">
                                            <dl>
                                                <dt>A-Z</dt>
                                                <dd style="width: 222px;" id="provincelist">
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="select_city_con_actived1 " type="c" style="width:289px; display:none">
                                            <dl>
                                                <dt>A-Z</dt>
                                                <dd style="width: 222px;" id="citylist">
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!--end-->
                            </div>
                            <div class="jsq_list">
                                <p class="jsq_city">户籍性质</p>
                                <input type="hidden" id="hidsbmin" />
                                <input type="hidden" id="hidsbmax" />
                                <input type="hidden" id="hidgjjmin" />
                                <input type="hidden" id="hidgjjmax" />
                                <input type="text" id="txtHkxz" class="household" readonly="readonly" value="请选择" style="cursor: pointer;">
                                <ul class="select_household" id="ulHkxz"></ul>
                            </div>
                            <div class="jsq_list">
                                <p class="jsq_city">社保基数</p>
                                <input class="number" id="txtSbBaseNum">
                            </div>

                            <!--是否缴纳-->
                            <div class="jsq_list2">
                                <div class="panduan">
                                    <div class="panduan_textck" id="divIsGjj">是否缴纳公积金</div>
                                    <div class="status-defualt" id="div_baserange"></div>
                                </div>
                            </div>
                            <div class="jsq_list3">
                                <div>
                                    <p class="jsq_gongjijin">公积金基数</p>
                                    <input class="number" id="txtGjjBaseNum" />
                                    <input type="hidden" id="hidHousingId" />
                                    <div class="fanwei" id="div_gjjbaserange"></div>
                                    <div class="clear"></div>
                                </div>
                                <div style="margin-top:20px;">
                                    <p class="jsq_city">缴纳比例</p>
                                    <input class="geren" value="" readonly="readonly" id="txtHouseP">
                                    <input class="gongsi" value="" readonly="readonly" id="txtHouseE">
                                    <div class="jsq_listb" style="display:none;">
                                        <div class="bilifanwei1">比例范围12.00到12.00</div>
                                        <div class="bilifanwei2">比例范围12.00到12.00</div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <!--end-->
                            <div class="jsq_list_jisuan">
                                <input type="image" src="/static/images/jisuan.png" class="jisuan">
                                <input type="image" src="/static/images/chongzhi.png" class="chongzhi">
                            </div>
                        </div>
                        <div class="jsq_R" style="background-color:#FFF">
                            <div class="biaoti2">社保与公积金缴费明细</div>
                            <div id="shebaoDetail">
                                <table cellpadding="0" cellspacing="0">
                                    <tr class="tr1" style="height:35px;">
                                        <td class="td1" style="color:#323232" rowspan="2">缴纳项目</td>
                                        <td class="td2" style="color:#323232" rowspan="2">社保基数</td>
                                        <td class="td3" style="color:#323232" colspan="2">个人缴纳</td>
                                        <td class="td4" style="color:#323232" colspan="2">企业缴纳</td>
                                    </tr>
                                    <tr class="tr2" style="height:35px;">
                                        <td style="color:#323232">缴纳比例</td>
                                        <td style="color:#323232">缴纳金额（元）</td>
                                        <td style="color:#323232">缴纳比例</td>
                                        <td style="color:#323232">缴纳金额（元）</td>
                                    </tr>
                                    <tr><td colspan="6">&nbsp;</td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--ENd-->
        </ul>
    </li>

    <li style="background: #fff; cursor: pointer;">
        <a id="nb_invite_ok" title="咨询客服"><img src="/static/images/ZXGT_icon.png" style="border-bottom:1px solid #e6e6e6;display:block;"></a>
        <ul class="cebian_Image1" id="zixun_img" style="right:121px;top:-193px;">
            <div class="rrb1_weixin">
                <div class="rrb1_weixin1">

                    <img src="/static/images/zixunimg.png" style="width:300px; height:300px; border:none;">
                </div>
            </div>
        </ul>
    </li>
    <li>
        <a href="javascript:;" id="backtop"><img src="/static/images/end_03.png" style="border-bottom:1px solid #e6e6e6"></a>
        <ul class="cebian_Image1"></ul>
    </li>
</ul>
<script src="/js/autocomplete/socialsecuritycalculator.js"></script>
<!-- 用户统计代码 gzz -->
<script type="text/javascript" src="http://db.rrb365.com/hm-rr.js"></script>
<script type="text/javascript" src="/js/autocomplete/footer.js"></script>
<script src="/js/o_code.js" type="text/javascript"></script>
    <div id="popDiv" class="mydiv" style="display: none;">
        <div class="tankuang">
            <div class="liuyan_Box">
                <img src="/static/images/liuyan_03.png" class="liuyan_Img">
                <div class="liuyan1">
                    <h3>人人保新版网站正式上线 </h3>
                    <p><strong>14年</strong>专注人事代理</p>
                    <p><strong>60000</strong>注册会员</p>
                    <p><strong>2000000次</strong>客户服务</p>

                </div>
            </div>
        </div>
    </div>
    <div id="bg" class="bg" style="display: none;">
    </div>
    <div class="shouhoutell" style="position:fixed;left:2%;top:20%;">
        <div class="shouhou_span">
            <img src="/static/images/悬浮.gif" alt="Alternate Text" />
        </div>
        <img src="/static/images/shouhoutell.png" alt="售后电话" />
    </div>
    <iframe id='popIframe' class='popIframe' frameborder='0'></iframe>
    <div class="slide_botm" id="div1">
        <div class="main_botm">
            <div class="box_left">
                人人保推出
                <代缴社保>
              <img src="/static/images/free_03.png">
            </div>
            <div class="box_submit">
                <div class="input_title">今日已有<span class="yellow">254</span>人参缴社保</div>
                <div class="shuru">
                    <input class="tel_inp" type="text" id="txtContactPhone" placeholder="手机(服务专员通过此号联系您)" />
                    <textarea class="tel_inp" id="txttextareaContent" placeholder="您的需求"></textarea>
                </div>
                <input class="sub_btn" onclick="FeedbackIndex()" value="提交" />
            </div>
            <div class="box_qr_code">
                扫一扫，关注有惊喜
              <img src="/static/images/qrcode_03.png">
            </div>
            <div class="closed_btn">
                <img src="/static/images/x_03.png">
            </div>
        </div>
    </div>
    <div class="yellow_btn">
        <img src="/static/images/arrow_right.png">
    </div>
</body>
</html>
