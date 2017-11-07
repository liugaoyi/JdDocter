<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主体模板</title>
    <link rel="stylesheet" href="/jdDoctertest1/Public/css/main.css" />
    <script type="text/javascript" src="/jdDoctertest1/Public/js/jquery-3.2.1.js"></script>

    <script type="text/javascript" src="/jdDoctertest1/Public/js/log.js"></script>
</head>
<body>

<form method="post" action="" name="form1"  data-node="fr1">
    <div class="bn_main">

        <!--头部-->
        <div class="bn_top">
            <div class="t_left" style="position:relative;">
                <a href="#">
                    &nbsp;&nbsp;&lt;&lt;
                </a>
            </div>
            <div class="t_right">
                维修账单
            </div>
        </div>
        <!--头部结束-->

        <!--主体-->
        <div class="bn_center">
            <div class="c_top">
                <div class="order-li-ops">
                    <label>
                        <input class="ipt" name="repair_type" type="radio" value="0" />保外订单
                        <input class="ipt" name="repair_type" type="radio" value="1" />保内订单
                    </label>
                </div>
            </div>
            <hr width="100%" style=" height:0.7rem; background-color:#D9D9D9; border:none;" />

            <div class="c_main">
                <div class="m_1">
                    <div class="m_left_1">
                        品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;牌
                    </div>
                    <div class="m_right_1">
                        <select name="pinpai">
                            <option value="">
                                格力
                            </option>

                            <option value="">
                                美的
                            </option>

                            <option value="">
                                松下
                            </option>

                            <option value="">
                                大金
                            </option>

                            <option value="">
                                三菱电机
                            </option>

                            <option value="">
                                三菱重工
                            </option>

                            <option value="">
                                其他
                            </option>
                        </select>
                    </div>
                </div>
                <hr width="100%" style=" height:0.7rem; background-color:#D9D9D9; border:none;" />

                <div class="m_1">
                    <div class="m_left_1">
                        产品型号
                    </div>

                    <div class="m_right_1">
                        <input name="chanpin" type="text" value="请填写" />
                    </div>
                </div>
                <hr width="100%" style=" height:0.7rem; background-color:#D9D9D9; border:none;" />

                <div class="m_1">
                    <div class="m_left_1">
                        高&nbsp;&nbsp;空&nbsp;&nbsp;费
                    </div>

                    <div class="m_right_1">
                        <label class="ax">请选择</label>
                        <div class="lol">
                            <img src="/jdDoctertest1/Public/images/2.png"/>
                        </div>
                    </div>
                </div>

                <div class="order-box" id="order-box1" style="display: none">
                    <div class="order-div">
                        <div class="order-ops line-x-b" >
                            <ul class="clearfix">
                                <?php if(is_array($goods_parts_list)): $k = 0; $__LIST__ = $goods_parts_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods_parts): $mod = ($k % 2 );++$k; if($goods_parts['cit_id'] == 1): ?><li class="clearfix line-x-t"  id="1">
                                            <span class="goods_name"><?php echo ($goods_parts['goods_name']); ?></span>
                                            <div data-node="li-ops" class="order-li-ops">
                            <span data-node="ctrl" data-cost="<?php echo ($goods_parts['sale_price']); ?>" data-type="-1" class="span-ops-1">
                                <input type="button" value="-"/>
                            </span>
                                                <span data-node="num" class="span-num">1</span>
                            <span data-node="ctrl"  data-cost="<?php echo ($goods_parts['sale_price']); ?>" data-type="1" class="span-ops-2">
                                <input type="button" value="+"/>
                            </span>
                                                <span data-node="cost"  data-cost="<?php echo ($goods_parts['sale_price']); ?>" class="span-cost">￥<?php echo ($goods_parts['sale_price']); ?></span>
                                                <input class="span-check" data-check="check" type="checkbox" name="choice[<?php echo ($k); ?>]" value="0"  />
                                                <input type="hidden" data-event="num" name="num[<?php echo ($k); ?>]" value="1" />
                                                <input type="hidden" name="goods_id[<?php echo ($k); ?>]" value="<?php echo ($goods_parts['goods_id']); ?>" />
                                            </div>
                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" name="order_id" value="<?php echo ($order_id); ?>" />
                </div>

                <hr width="100%" style=" height:0.7rem; background-color:#D9D9D9; border:none" />

                <div class="m_1">
                    <div class="m_left_1">
                        加&nbsp;&nbsp;雪&nbsp;&nbsp;种
                    </div>

                    <div class="m_right_1">
                        <label class="ax" id="ax">请选择</label>
                        <div class="lol">
                            <img src="/jdDoctertest1/Public/images/2.png" />
                        </div>
                    </div>
                </div>

                <div class="order-box" id="order-box2" style="display: none">
                    <div class="order-div">
                        <div class="order-ops line-x-b">
                            <ul class="clearfix">
                                <?php if(is_array($goods_parts_list)): $k = 0; $__LIST__ = $goods_parts_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods_parts): $mod = ($k % 2 );++$k; if($goods_parts['cit_id'] == 2): ?><li class="clearfix line-x-t"  id="2">
                                            <span class="goods_name"><?php echo ($goods_parts['goods_name']); ?></span>
                                            <div data-node="li-ops" class="order-li-ops">
                            <span data-node="ctrl" data-cost="<?php echo ($goods_parts['sale_price']); ?>" data-type="-1" class="span-ops-1">
                                <input type="button" value="-"/>
                            </span>
                                                <span data-node="num" class="span-num">1</span>
                            <span data-node="ctrl"  data-cost="<?php echo ($goods_parts['sale_price']); ?>" data-type="1" class="span-ops-2">
                                <input type="button" value="+"/>
                            </span>
                                                <span data-node="cost"  data-cost="<?php echo ($goods_parts['sale_price']); ?>" class="span-cost">￥<?php echo ($goods_parts['sale_price']); ?></span>
                                                <input class="span-check" type="checkbox" name="choice[<?php echo ($k); ?>]" value="0" />
                                                <input type="hidden" data-event="num" name="num[<?php echo ($k); ?>]" value="1" />
                                                <input type="hidden" name="goods_id[<?php echo ($k); ?>]" value="<?php echo ($goods_parts['goods_id']); ?>" />
                                            </div>
                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" name="order_id" value="<?php echo ($order_id); ?>" />
                </div>

                <hr width="100%" style=" height:0.7rem; background-color:#D9D9D9; border:none" />

                <div class="m_1">
                    <div class="m_left_1">
                       维修服务
                    </div>

                    <div class="m_right_1">
                        <label class="ax" id="ax">请选择</label>
                        <div class="lol">
                            <img src="/jdDoctertest1/Public/images/2.png"/>
                        </div>
                    </div>
                </div>

                <div class="order-box" id="order-box3" style="display: none">
                    <div class="order-div">
                        <div class="order-ops line-x-b" >
                            <ul class="clearfix">
                                <?php if(is_array($goods_parts_list)): $k = 0; $__LIST__ = $goods_parts_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods_parts): $mod = ($k % 2 );++$k; if($goods_parts['cit_id'] == 3): ?><li class="clearfix line-x-t"  id="3">
                                            <span class="goods_name"><?php echo ($goods_parts['goods_name']); ?></span>
                                            <div data-node="li-ops" class="order-li-ops">
                            <span data-node="ctrl" data-cost="<?php echo ($goods_parts['sale_price']); ?>" data-type="-1" class="span-ops-1">
                                <input type="button" value="-"/>
                            </span>
                                                <span data-node="num" class="span-num">1</span>
                            <span data-node="ctrl"  data-cost="<?php echo ($goods_parts['sale_price']); ?>" data-type="1" class="span-ops-2">
                                <input type="button" value="+"/>
                            </span>
                                                <span data-node="cost"  data-cost="<?php echo ($goods_parts['sale_price']); ?>" class="span-cost">￥<?php echo ($goods_parts['sale_price']); ?></span>
                                                <input class="span-check" data-check="check" type="checkbox" name="choice[<?php echo ($k); ?>]" value="0"  />
                                                <input type="hidden" data-event="num" name="num[<?php echo ($k); ?>]" value="1" />
                                                <input type="hidden" name="goods_id[<?php echo ($k); ?>]" value="<?php echo ($goods_parts['goods_id']); ?>" />
                                            </div>
                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" name="order_id" value="<?php echo ($order_id); ?>" />
                </div>


                <hr width="100%" style=" height:0.7rem; background-color:#D9D9D9; border:none" />

                <div class="m_1">
                    <div class="m_left_1">
                        维修项目
                    </div>

                    <div class="m_right_1">
                        <label class="ax" id="ax">请选择</label>
                        <div class="lol">
                            <img src="/jdDoctertest1/Public/images/2.png"/>
                        </div>
                    </div>
                </div>

                <div class="order-box" id="order-box4" style="display: none">
                    <div class="order-div">
                        <div class="order-ops line-x-b" >
                            <ul class="clearfix">
                                <?php if(is_array($goods_parts_list)): $k = 0; $__LIST__ = $goods_parts_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods_parts): $mod = ($k % 2 );++$k; if($goods_parts['cit_id'] == 4): ?><li class="clearfix line-x-t"  id="4">
                                            <span class="goods_name"><?php echo ($goods_parts['goods_name']); ?></span>
                                            <div data-node="li-ops" class="order-li-ops">
                            <span data-node="ctrl" data-cost="<?php echo ($goods_parts['sale_price']); ?>" data-type="-1" class="span-ops-1">
                                <input type="button" value="-"/>
                            </span>
                                                <span data-node="num" class="span-num">1</span>
                            <span data-node="ctrl"  data-cost="<?php echo ($goods_parts['sale_price']); ?>" data-type="1" class="span-ops-2">
                                <input type="button" value="+"/>
                            </span>
                                                <span data-node="cost"  data-cost="<?php echo ($goods_parts['sale_price']); ?>" class="span-cost">￥<?php echo ($goods_parts['sale_price']); ?></span>
                                                <input class="span-check" data-check="check" type="checkbox" name="choice[<?php echo ($k); ?>]" value="0"  />
                                                <input type="hidden" data-event="num" name="num[<?php echo ($k); ?>]" value="1" />
                                                <input type="hidden" name="goods_id[<?php echo ($k); ?>]" value="<?php echo ($goods_parts['goods_id']); ?>" />
                                            </div>
                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" name="order_id" value="<?php echo ($order_id); ?>" />
                </div>

                <hr width="100%" style=" height:0.7rem; background-color:#D9D9D9; border:none" />

                <div class="m_1">
                    <div class="m_left_1">
                        配&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;件
                    </div>

                    <div class="m_right_1">
                        <label class="ax" id="ax">请选择</label>
                        <div class="lol">
                            <img src="/jdDoctertest1/Public/images/2.png"/>
                        </div>
                    </div>
                </div>

                <div class="order-box" id="order-box5" style="display: none">
                    <div class="order-div">
                        <div class="order-ops line-x-b" >
                            <ul class="clearfix">
                                <?php if(is_array($goods_parts_list)): $k = 0; $__LIST__ = $goods_parts_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods_parts): $mod = ($k % 2 );++$k; if($goods_parts['cit_id'] == 5): ?><li class="clearfix line-x-t"  id="5">
                                            <span class="goods_name"><?php echo ($goods_parts['goods_name']); ?></span>
                                            <div data-node="li-ops" class="order-li-ops">
                            <span data-node="ctrl" data-cost="<?php echo ($goods_parts['sale_price']); ?>" data-type="-1" class="span-ops-1">
                                <input type="button" value="-"/>
                            </span>
                                                <span data-node="num" class="span-num">1</span>
                            <span data-node="ctrl"  data-cost="<?php echo ($goods_parts['sale_price']); ?>" data-type="1" class="span-ops-2">
                                <input type="button" value="+"/>
                            </span>
                                                <span data-node="cost"  data-cost="<?php echo ($goods_parts['sale_price']); ?>" class="span-cost">￥<?php echo ($goods_parts['sale_price']); ?></span>
                                                <input class="span-check" data-check="check" type="checkbox" name="choice[<?php echo ($k); ?>]" value="0"  />
                                                <input type="hidden" data-event="num" name="num[<?php echo ($k); ?>]" value="1" />
                                                <input type="hidden" name="goods_id[<?php echo ($k); ?>]" value="<?php echo ($goods_parts['goods_id']); ?>" />
                                            </div>
                                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" name="order_id" value="<?php echo ($order_id); ?>" />
                </div>
                </div>

                    </div>
                </div>

                </div>
            </div>

        </div>
        <!--主体结束-->
    </div>

    <hr width="100%" style=" height:0.7rem; background-color:#D9D9D9; border:none;" />

    <div style="height:8.4rem; line-height:8.4rem; clear:both;"></div>

    <div class="footer">
        <div class="order-btn">
            <div class="order-cost">
                合计<span>0元</span>
            </div>
        </div>
        <div class="f_right">
            <button class="btn1" >取消</button>
            <button class="btn2" >确认</button>
        </div>
    </div>
</form>
</body>
<script>
    //获取整个网页文本对象
    $(document).ready(function(){
        get_goods_price(); // 更新商品价格
    });



    //更新当前div的合计价格
    function get_check_price(test){
        var jshu = 0;
        var goods_price = 0; // 商品起始价
        var attach_ops = test.find('[data-node="li-ops"]');//显示数据内容div
        var txt = test.prev(".m_1").find(".ax");
        if(attach_ops.length > 0){
            //开启遍历
            $(attach_ops).each(function () {
                //获得当前价格变量
                var cost = parseFloat($(this).children('[data-node="cost"]').data('cost')),
                        selected = $(this).children('.span-check').prop('checked');//获得当前是否勾选了该商品
                //如果没有勾选
                if (selected==false) {
                    cost = 0;//返回cost为0
                }else{
                    ++jshu;
                }
                goods_price += cost;//更新价格
            })
        }
        if(jshu >= 1 ){
            txt.html('已选中'+jshu +'项，合计' + goods_price+ '元'); // 变动价格显示
        }else
        {
            txt.html("请选择");
        }
    }

   $(".ipt").click(function(){
       var val_payPlatform = $('input[name="repair_type"]:checked ').val();
       console.log(val_payPlatform);
       if(val_payPlatform == 1){
           $("#order-box3").find(".span-cost").html("厂家结算");
       }
    })

    //选中变色
    $(".span-check").click(function(){
        var txt = $(this).siblings(".span-cost");
        if(this.checked){
            txt.css('color','red');
        }else {
            txt.css('color','black');
        }
    });

    /*
     div层点击显示隐藏
     * */
    $('div.lol').on('click',function(e){
        var ts = $(this).parents(".m_1");
        var order = ts.next();
        if (order.css("display")=="none") {
            order.show();
        } else {
            order.hide();
        }
    })

    function get_goods_price() {
        var goods_price = 0; // 商品起始价
        var attach_ops =$('[data-node="li-ops"]');//显示数据内容div
        //如果有数据
        if (attach_ops.length > 0) {
            //开启遍历
            attach_ops.each(function () {
                //获得当前价格变量
                var cost = parseFloat($(this).children('[data-node="cost"]').data('cost')),
                        selected = $(this).children('.span-check').prop('checked');//获得当前是否勾选了该商品
                //如果没有勾选
                if (selected==false) {
                    cost = 0;//返回cost为0
                }
                //console.log("cost:" + cost);
                //console.log("selected:" + selected);
                goods_price += cost;//更新价格
                //console.log("good_price:" + goods_price);
            })
        }
        $('.order-cost').html('合计<span>￥' + goods_price.toFixed(2) + '元</span>'); // 变动价格显示
    }


    $('[data-node="li-ops"]').on('click','.span-check',function() {
        get_goods_price();
        get_check_price($("#order-box1"));
        get_check_price($("#order-box2"));
        get_check_price($("#order-box3"));
        get_check_price($("#order-box4"));
        get_check_price($("#order-box5"));
    })

    $('[data-node="li-ops"]').on('click','[data-node="ctrl"]',function(){
        var parent=$(this).parent();//li父元素
        var type=$(this).data('type');//+-符号
        var cost=$(this).data('cost');//当前价格
        var num=parent.find('[data-event="num"]').val();//中间数字大小
        var val=parseInt(num)+parseInt(type);//计算加减符号后的中间数字大小
        console.log(parent);
        console.log(type);
        console.log(cost);
        console.log(num);
        //等于0跳出循环
        if(val==0){
            return;
        }
        else{
            parent.find('[data-event="num"]').val(val);//把加减后的中间数字 赋予给页面
            parent.find('[data-node="num"]').html(val);//拿到加减后的中间数字
            parent.find('[data-node="cost"]').data('cost', ((cost*1000*val)/1000).toFixed(2)).html('￥'+((cost*1000*val)/1000).toFixed(2));//计算出加减后价格
        }
        get_goods_price();
        get_check_price($("#order-box1"));
        get_check_price($("#order-box2"));
        get_check_price($("#order-box3"));
        get_check_price($("#order-box4"));
        get_check_price($("#order-box5"));
    });
</script>
</html>