from matplotlib import pyplot as plt
from matplotlib import style
import numpy as np

style.use('ggplot')

x,y = np.loadtxt('13_6_wykresy.csv',
                 unpack = True, 
                 delimiter = ','
                )

plt.plot(x,y)
plt.title('Wykres')
plt.ylabel('oś Y')
plt.xlabel('oś X')

plt.show()