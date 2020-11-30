import matplotlib.pyplot as plt

age = [55, 60, 1, 2, 50, 3]

scale = [0, 10, 20, 30,  40, 50, 60, 70, 80, 90, 100]

# hist => histogram
plt.hist(age, scale, histtype = 'bar', rwidth = 0.8)

plt.xlabel('wiek')
plt.ylabel('Ilośc')
plt.title('Wykres')
plt.legend()
plt.show()