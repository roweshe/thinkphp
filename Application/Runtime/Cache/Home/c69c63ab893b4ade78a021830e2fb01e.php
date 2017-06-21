<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增用户</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/global.css" media="all">
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/bootstrap/css/bootstrap.css" media="all">
    <link rel="stylesheet" type="text/css" href="/think/Public/frame/layui/css/layui.css" media="all">
    <link rel="stylesheet" type="text/css" href="/think/Public/mylib/css/common.css" media="all">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_gimrgenqdsvjwcdi.css">
    <script type="text/javascript" src="/think/Public/mylib/js/jquery-1.11.1.min.js"></script>
    
    
    <style>
        .account-panel{
            width: 600px;
            padding: 15px;
            margin: 20px auto;
            background: #fff;
            border: 1px solid #eee;
            border-radius: 10px;
        }

        .account-tab td{
            padding:5px 0 ;
        }
        .layui-input-inline input{
            width: 310px;
        }
        .layui-form .layui-input-inline input{
            width: 100px;
        }
    </style>


</head>
<body>

    <a href="">刷新</a>
    <div class="account-panel">
        <table class="my-width-100 account-tab">
            <tr>
                <td>手机号码</td>
                <td align="right">
                    <div class="layui-input-inline">
                        <input type="tel" name="phone"   placeholder="输入手机号码" autocomplete="off" class="layui-input">
                    </div>
                </td>
            </tr>
            <tr>
                <td>登陆密码</td>
                <td align="right">
                    <div class="layui-input-inline">
                        <input type="password" name="psw"  placeholder="输入登陆密码" autocomplete="off" class="layui-input">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>门店名称</td>
                <td align="right">
                    <div class="layui-input-inline">
                        <input type="text" name="shopname"  placeholder="输入名店名称" autocomplete="off" class="layui-input">
                    </div>
                </td>
            </tr>
            <tr>
                <td>所属地区</td>
                <td align="right">
                    <div class="layui-form">
                            <div class="layui-input-inline">
                                <select name="quiz1">
                                    <option value="">请选择省</option>
                                    <option value="浙江" selected="">浙江省</option>
                                    <option value="你的工号">江西省</option>
                                    <option value="你最喜欢的老师">福建省</option>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <select name="quiz2">
                                    <option value="">请选择市</option>
                                    <option value="杭州">杭州</option>
                                    <option value="宁波" disabled="">宁波</option>
                                    <option value="温州">温州</option>
                                    <option value="温州">台州</option>
                                    <option value="温州">绍兴</option>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <select name="quiz3">
                                    <option value="">请选择县/区</option>
                                    <option value="西湖区">西湖区</option>
                                    <option value="余杭区">余杭区</option>
                                    <option value="拱墅区">临安市</option>
                                </select>
                            </div>
                        </div>

                </td>
            </tr>
            <tr>
                <td>详细地址</td>
                <td align="right">
                    <div class="layui-input-inline">
                        <input type="text" name="address"   placeholder="请填写详细地址" autocomplete="off" class="layui-input">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                   <button type="submit" class="layui-btn" style="width: 200px">提交保存</button>
                </td>
            </tr>
        </table>
    </div>


    <script type="text/javascript" src="/think/Public/frame/layui/layui.js"></script>
    <script>
        //实例化 layer
        layui.use('layer', function(){
            var layer = layui.layer;

        });

        $('.search-input').on('focus',function(){
            layer.tips('输入搜索内容', '.search-input', {
                tips: [1, '#111'] //还可配置颜色
            });
        })
    </script>


    <script type="text/javascript" src="/think/Public/mylib/js/fontchange.js"></script>


    <script>
        layui.use(['form', 'layedit', 'laydate'], function(){
            var form = layui.form()
                    ,layer = layui.layer
                    ,layedit = layui.layedit
                    ,laydate = layui.laydate;

            //创建一个编辑器
            var editIndex = layedit.build('LAY_demo_editor');

            //自定义验证规则
            form.verify({
                title: function(value){
                    if(value.length < 5){
                        return '标题至少得5个字符啊';
                    }
                }
                ,pass: [/(.+){6,12}$/, '密码必须6到12位']
                ,content: function(value){
                    layedit.sync(editIndex);
                }
            });



        });
    </script>

</body>
</html>