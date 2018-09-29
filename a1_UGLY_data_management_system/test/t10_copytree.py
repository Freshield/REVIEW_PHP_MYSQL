
import os

print('here')

old_dir = '/media/freshield/YYSPACE/TEST_CSV/guigangyiyuan/20180917/PID003002/4782/'
new_dir = '/media/freshield/YYSPACE/SELECTED_DATA_20180929/guigangyiyuan/20180917/PID003002'

print('here1')

try:
    os.system('mkdir -p %s'%(new_dir))
    os.system('cp -r %s %s'%(old_dir, new_dir))
except OSError as e:
    print('OSError',e)

print('here2')