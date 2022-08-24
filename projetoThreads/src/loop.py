# criar um loop para gerar iterações e testar alguns parametros
#Objetivo descobrir qual é o ultimo valor para numeros pares e impares do laço
valores = [] #Array

for i in range(100000):
    if (i %2 == 0):
        #valores.append((i*i))
        valores.insert(0, (i*i))#insere valores em uma posição determinada
    else:
        #valores.append(((i*i)-1))
        valores.insert(1, (i*i)-1)

print('Par..:', valores[0])
print('Impar..:', valores[1])
#print('Par..:', valores[len(valores)-2])
#print('Par..:', valores[len(valores)-1])