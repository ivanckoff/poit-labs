#  File: 'E:\Embedded\Projects\POCP\Lab05\Lab05\src\Task1_TB\Task1_tb3.do'
#  created: 10/18/14 15:54:05
#  from: 'E:\Embedded\Projects\POCP\Lab05\Lab05\src\Task1.asf'
#  by ASFTEST - v.2.1.3 build 56, August 25, 2005

#
# rebuild the project
#
comp "E:\Embedded\Projects\POCP\Lab05\Lab05\src\Task1.asf"
comp "E:\Embedded\Projects\POCP\Lab05\Lab05\src\Task1_TB\Task1_tb3.vhd"

#
# set top-level and initialize the simulator with Code Coverage Data
#
asim -cc -cc_dest $DSN/coverage/Task1_cc_tb3 -cc_hierarchy -cc_all Task1_cfg_tb3

#
# invoke Waveform Viewer window, add signals to Waveform
#
wave
wave -noreg -dec cycle_num
wave -noreg CLK
wave -noreg UUT/NextState_state
wave -noreg UUT/state
wave -noreg test_state
wave -noreg RST
wave -noreg IP
wave -noreg OP

#
#
#
run -all
endsim
write wave "E:\Embedded\Projects\POCP\Lab05\Lab05\src\Task1_TB\Task1_tb3.awf"
#close -wave
