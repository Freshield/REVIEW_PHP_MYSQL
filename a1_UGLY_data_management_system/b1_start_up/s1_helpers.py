#!/usr/bin/env python
#coding=utf-8
"""
@Author: Freshield
@License: (C) Copyright 2018, BEIJING LINKING MEDICAL TECHNOLOGY CO., LTD.
@Contact: yangyufresh@163.com
@File: s1_helpers.py
@Time: 2018-09-29 11:30
@Last_update: 2018-09-29 11:30
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
import shutil
import inspect
import mysql.connector as mc


def get_dicom_instance_path_from_query(
        query, host='localhost', user='root',
        passwd='8888', database='linkingmed_bj'):
    mydb = mc.connect(host=host, user=user, passwd=passwd, database=database)
    mycursor = mydb.cursor()
    mycursor.execute(query)
    query_res = mycursor.fetchall()
    rst_list = []
    for res in query_res:
        rst_list.append(res[0])

    return rst_list

def insert_log_into_db(
        log, host='localhost', user='root',
        passwd='8888', database='linkingmed_bj'):
    mydb = mc.connect(host=host, user=user, passwd=passwd, database=database)
    mycursor = mydb.cursor()
    query = "insert into temp_log (log) values ('%s')"%(log)
    mycursor.execute(query)

    mydb.commit()

def mkdir(path):
    """

    :param path: str
    :return: None
    """

    path = path.strip()
    os.makedirs(path)

def judge_mkdir(path):
    """

    :param path: str
    :return: None
    """

    path = path.strip()
    if not os.path.exists(path):
        mkdir(path)

def judge_add_os_sep(file_path):
    if file_path[-1] != os.sep:
        file_path = file_path + os.sep

    return file_path

def del_dir(file_dir):
    print('here3')
    shutil.rmtree(file_dir)

def judge_del_dir(file_dir):
    print('here1')
    if os.path.exists(file_dir):
        print('here2')
        del_dir(file_dir)

def judge_del_copy_dir(old_dir, new_dir):

    print('here4')
    try:
        os.system('mkdir -p %s'%(new_dir))
        os.system('cp -r %s %s'%(old_dir, new_dir))
    except OSError as e:
        print('OSError',e)
    except shutil.Error as e:
        print('SHUTIL Error',e)
    print('here5')
