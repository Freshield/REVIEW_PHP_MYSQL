#!/usr/bin/env python
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
sys.path.append('.')
from script_helper import *

print('here0')
root_dir = '/media/freshield/'
data_root_dir = '/media/freshield/DATA/TEST_CSV'

if len(sys.argv) == 3:
    path_of_disk = sys.argv[1]
    query = sys.argv[2]
else:
    raise ('parameter number is wrong...')

print('here1')
# path_of_disk = 'YYSPACE'
# query = ''
# print(path_of_disk)
#
# table_name = 'data_db_v1'
# condition = 'Heart=True and Brain=True and Liver=True'
# query = 'select dicom_instance_path from %s where %s'%(table_name,condition)
# print(query)

date = time.strftime("%Y%m%d", time.localtime())
save_dir = os.path.join(root_dir,path_of_disk,'SELECTED_DATA_%s'%date)

print(save_dir)

judge_mkdir(save_dir)

series_path_list = get_dicom_instance_path_from_query(query)

total_res_number = len(series_path_list)

for i in range(len(series_path_list)):
    series_path = series_path_list[i]
    word = '%d/%d copying... %s'%(i,total_res_number,series_path)
    print(word)

    insert_log_into_db(word)
    temp_root_dir = judge_add_os_sep(data_root_dir)
    temp_save_dir = judge_add_os_sep(save_dir)
    save_path = series_path.replace(temp_root_dir, temp_save_dir)
    save_path = judge_add_os_sep(save_path)
    save_path = os.sep.join(save_path.split(os.sep)[:-2])
    print(save_path)
    judge_del_copy_dir(series_path, save_path)


insert_log_into_db('Done copy data')


