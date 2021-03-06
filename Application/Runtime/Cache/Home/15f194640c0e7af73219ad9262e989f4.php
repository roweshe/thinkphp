<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>今日清洗</title>
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
        body{
            padding: 15px;
        }
        .info-title{
            padding: 5px 0;
            display: inline-block;
            border-bottom:3px solid #0099ff;
            margin: 10px auto 0 auto;
        }
        .total-ul li{
            width: 23.5%;
            min-width: 200px;
            float: left;
        }
        .total-ul li:not(:first-child){
            margin-left:1.5%;
        }
        .total-wrap{
            background: #fff;
            width: 100%;
            border-radius: 10px;
            border-bottom:10px solid #0099ff;
            text-align: center;
            padding-bottom: 40%;
            position: relative;
            box-shadow: 0 0 1px 1px #eee;
            margin-top:10px;

        }
        .total-td{
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            -moz-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            -o-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }
        .layui-elem-quote{
            display: -webkit-flex; /* Safari */
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .search-wrap{
            position: relative;
        }
        .icon-search{
            position: absolute;
            right: 10px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            font-size: 20px;
            color: #999999;
        }
        .search-input{
            padding-right: 50px;
            height: 34px;
            line-height: 34px;
            font-size: 14px;
        }
        .search-wrap:hover .search-input{
            border: 1px solid #0099ff!important;
        }
        .search-wrap:hover .icon-search{
            color: #0099ff;
        }
        .layui-elem-quote{
            padding: 10px 15px;
        }
        .refresh-btn{
            height: 34px;
            line-height: 34px;
            font-size: 14px;
        }
        .number{
            font-size: 3rem;
            color: #0099ff;
        }
        .unit{
            position: absolute;
            top: 12px;
            right: -16px;
            color: #0099ff;
        }
        .num-wrap{
            position: relative;
        }
        .num-title{
            color: #888;
        }
        .today-tab {
            border-collapse: separate;
            border-radius: 10px;
        }
        .today-tab thead th:first-child{
            border-radius: 10px 0 0 0 ;
        }
        .today-tab thead th:last-child{
            border-radius:0 10px 0 0 ;
        }
        .today-tab td{
            text-align: center;
            white-space: nowrap;
        }
        .today-tab thead th{
            text-align: center;
            color: #fff;
            background: #0099ff;
            padding: 10px 0;
            white-space: nowrap;
        }
        .today-tab thead th:not(:last-child):after{
            content: '';
            display: inline-block;
            width: 1px;
            height: 18px;
            vertical-align: middle;
            background: #fff;
            float: right;
        }
        .icon-download{
            cursor: pointer;
        }
        .checkout-btn{
            background: #fff;
            border: 1px solid #0099ff;
            border-radius: 100px;
            color: #0099ff;
            padding: 3px 0;
            width: 60px;
        }
        .checkout-btn:hover{
            background: #0099ff;
            color: #fff;
        }
        .control-btn{
            background: #fff;
            border: 1px solid #55bb88;
            border-radius: 100px;
            color: #55bb88;
            padding: 3px 0;
            width: 60px;
        }
        .control-btn:hover{
            background: #55bb88;
            color: #fff;
        }
    </style>

</head>
<body>

    <blockquote class="layui-elem-quote my-bg-white">
        <div style="line-height: 30px;font-size: 16px">船舶列表</div>
        <div>
            <div class="layui-input-inline search-wrap">
                <input type="text" placeholder="搜索"  class="layui-input search-input">
                <i class="iconfont icon-search my-pointer"></i>
            </div>
            <a href="">
                <button class="layui-btn   my-fr my-margin-l30 refresh-btn"><i class="iconfont icon-refresh my-margin-r5"></i>刷新</button>
            </a>
        </div>
    </blockquote>

    <table class="layui-table today-tab " lay-skin="line">
        <thead>
        <tr class="my-bg-them my-text-center">
            <th>船舶名称</th>
            <th>采集器编号</th>
            <th>排水量</th>
            <th>发电系统</th>
            <th width="250">操作</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>育德轮</td>
            <td>20170588F</td>
            <td>3889</td>
            <td>xxx锂电池</td>
            <td>
                <button class="checkout-btn">查看</button>
                <button class="control-btn my-margin-l10">控制</button>
            </td>
        </tr>
        <tr>
            <td>育德轮</td>
            <td>20170588F</td>
            <td>3889</td>
            <td>xxx锂电池</td>
            <td>
                <button class="checkout-btn">查看</button>
                <button class="control-btn my-margin-l10">控制</button>
            </td>
        </tr>
        <tr>
            <td>育德轮</td>
            <td>20170588F</td>
            <td>3889</td>
            <td>xxx锂电池</td>
            <td>
                <button class="checkout-btn">查看</button>
                <button class="control-btn my-margin-l10">控制</button>
            </td>
        </tr>
        <tr>
            <td>育德轮</td>
            <td>20170588F</td>
            <td>3889</td>
            <td>xxx锂电池</td>
            <td>
                <button class="checkout-btn">查看</button>
                <button class="control-btn my-margin-l10">控制</button>
            </td>
        </tr>
        <tr>
            <td>育德轮</td>
            <td>20170588F</td>
            <td>3889</td>
            <td>xxx锂电池</td>
            <td>
                <button class="checkout-btn">查看</button>
                <button class="control-btn my-margin-l10">控制</button>
            </td>
        </tr>
        </tbody>
    </table>
    <div class="larry-table-page clearfix">
        <div id="page" class="page"></div>
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
        layui.use(['jquery','layer','element','laypage'],function(){
            window.jQuery = window.$ = layui.jquery;
            window.layer = layui.layer;
            var element = layui.element(),
                    laypage = layui.laypage;
            laypage({
                cont: 'page',
                pages: 10 //总页数
                ,
                groups: 5 //连续显示分页数
                ,
                jump: function(obj, first) {
                    //得到了当前页，用于向服务端请求对应数据
                    var curr = obj.curr;
                    if(!first) {
                        //layer.msg('第 '+ obj.curr +' 页');
                    }
                }
            });
        });
    </script>

</body>
</html>