#coding=utf-8
"""
@Author: Freshield
@License: (C) Copyright 2018, BEIJING LINKING MEDICAL TECHNOLOGY CO., LTD.
@Contact: yangyufresh@163.com
@File: b5_get_place.py.py
@Time: 2018-09-28 19:34
@Last_update: 2018-09-28 19:34
@Desc: None
@==============================================@
@      _____             _   _     _   _       @
@     |   __|___ ___ ___| |_|_|___| |_| |      @
@     |   __|  _| -_|_ -|   | | -_| | . |      @
@     |__|  |_| |___|___|_|_|_|___|_|___|      @
@                                    Freshield @
@==============================================@
"""
import os

root_dir = '/media/freshield/'

test_list = os.listdir(root_dir)
for i in range(len(test_list)):
    if i != len(test_list) - 1:
        print('%s,'%(test_list[i]))
    else:
        print(test_list[i])