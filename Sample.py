#!/usr/bin/env python
import sys
#import subprocess
import threading
def printit():
        threading.Timer(5.0, printit).start()
        print("Hello world!")
printit()