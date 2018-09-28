# coding=utf-8
"""
@Author: Freshield
@License: (C) Copyright 2018, BEIJING LINKING MEDICAL TECHNOLOGY CO., LTD.
@Contact: yangyufresh@163.com
@File: t5_show_dirs.py
@Time: 2018-09-20 15:02
@Last_update: 2018-09-20 15:02
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

print('here')
for file_name in os.listdir(root_dir):
    print('here1')
    print(file_name,',')