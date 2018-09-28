#coding=utf-8
"""
@Author: Freshield
@License: (C) Copyright 2018, BEIJING LINKING MEDICAL TECHNOLOGY CO., LTD.
@Contact: yangyufresh@163.com
@File: b7_download_script.py
@Time: 2018-09-28 21:00
@Last_update: 2018-09-28 21:00
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
import sys
import time
import yy_lib as yy

root_dir = '/media/freshield/'

# if len(sys.argv) == 3:
#     path_of_disk = sys.argv[1]
#     query = sys.argv[2]
# else:
#     raise ('parameter number is wrong...')

path_of_disk = 'YYSPACE'
query = ''
print(path_of_disk)
print(query)

date = time.strftime("%Y%m%d", time.localtime())
save_dir = os.path.join(root_dir,path_of_disk,'SELECTED_DATA_%s'%date)

print(save_dir)
yy.io.judge_mkdir(save_dir)



