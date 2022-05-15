#!/usr/bin/env python

import pandas as pd
import numpy as np
import sys
import csv
import operator
import math
#os.system('python RecKnn.py')
def euclideanDistance(instance1, instance2, length):
    distance = 0
    for x in range(length):
        distance += pow((instance1[x] - instance2[x]), 2)
    return math.sqrt(distance)

def getNeighbors(trainingSet, testInstance, k):
    distances = []
    length = len(testInstance) - 1
    for x in range(len(trainingSet)):
        dist = euclideanDistance(testInstance, trainingSet[x], length)
        distances.append((trainingSet[x], dist))
    distances.sort(key=operator.itemgetter(1))
    neighbors = []
    for x in range(k):
        neighbors.append(distances[x][0])
    return neighbors

def getResponse(neighbors):
    classVotes = {}
    for x in range(len(neighbors)):
        response = neighbors[x][-1]
        if response in classVotes:
            classVotes[response] += 1
        else:
            classVotes[response] = 1
    sortedVotes = sorted(classVotes.items(), key=operator.itemgetter(1), reverse=True)
    return sortedVotes[0][0]

def getAccuracy(testSet, predictions):
    correct = 0
    for x in range(len(testSet)):
        if testSet[x][-1] == predictions[x]:
            correct += 1
    return (correct / float(len(testSet))) * 100.0

job_description = '''The position is for a developer who is experienced in languages like Java or Python or machinelearning '''
job_description = job_description.lower()
stop_words = set(["a","about","above","after","again","against","ain","all","am","an","and","any","are","aren","aren't","as","at","be","because","been","before","being","below","between","both","but","by","can","couldn","couldn't","d","did","didn","didn't","do","does","doesn","doesn't","doing","don","don't","down","during","each","few","for","from","further","had","hadn","hadn't","has","hasn","hasn't","have","haven","haven't","having","he","her","here","hers","herself","him","himself","his","how","i","if","in","into","is","isn","isn't","it","it's","its","itself","just","ll","m","ma","me","mightn","mightn't","more","most","mustn","mustn't","my","myself","needn","needn't","no","nor","not","now","o","of","off","on","once","only","or","other","our","ours","ourselves","out","over","own","re","s","same","shan","shan't","she","she's","should","should've","shouldn","shouldn't","so","some","such","t","than","that","that'll","the","their","theirs","them","themselves","then","there","these","they","this","those","through","to","too","under","until","up","ve","very","was","wasn","wasn't","we","were","weren","weren't","what","when","where","which","while","who","whom","why","will","with","won","won't","wouldn","wouldn't","y","you","you'd","you'll","you're","you've","your","yours","yourself","yourselves","could","he'd","he'll","he's","here's","how's","i'd","i'll","i'm","i've","let's","ought","she'd","she'll","that's","there's","they'd","they'll","they're","they've","we'd","we'll","we're","we've","what's","when's","where's","who's","why's","would","able","abst","accordance","according","accordingly","across","act","actually","added","adj","affected","affecting","affects","afterwards","ah","almost","alone","along","already","also","although","always","among","amongst","announce","another","anybody","anyhow","anymore","anyone","anything","anyway","anyways","anywhere","apparently","approximately","arent","arise","around","aside","ask","asking","auth","available","away","awfully","b","back","became","become","becomes","becoming","beforehand","begin","beginning","beginnings","begins","behind","believe","beside","besides","beyond","biol","brief","briefly","c","ca","came","cannot","can't","cause","causes","certain","certainly","co","com","come","comes","contain","containing","contains","couldnt","date","different","done","downwards","due","e","ed","edu","effect","eg","eight","eighty","either","else","elsewhere","end","ending","enough","especially","et","etc","even","ever","every","everybody","everyone","everything","everywhere","ex","except","f","far","ff","fifth","first","five","fix","followed","following","follows","former","formerly","forth","found","four","furthermore","g","gave","get","gets","getting","give","given","gives","giving","go","goes","gone","got","gotten","h","happens","hardly","hed","hence","hereafter","hereby","herein","heres","hereupon","hes","hi","hid","hither","home","howbeit","however","hundred","id","ie","im","immediate","immediately","importance","important","inc","indeed","index","information","instead","invention","inward","itd","it'll","j","k","keep","keeps","kept","kg","km","know","known","knows","l","largely","last","lately","later","latter","latterly","least","less","lest","let","lets","like","liked","likely","line","little","'ll","look","looking","looks","ltd","made","mainly","make","makes","many","may","maybe","mean","means","meantime","meanwhile","merely","mg","might","million","miss","ml","moreover","mostly","mr","mrs","much","mug","must","n","na","name","namely","nay","nd","near","nearly","necessarily","necessary","need","needs","neither","never","nevertheless","new","next","nine","ninety","nobody","non","none","nonetheless","noone","normally","nos","noted","nothing","nowhere","obtain","obtained","obviously","often","oh","ok","okay","old","omitted","one","ones","onto","ord","others","otherwise","outside","overall","owing","p","page","pages","part","particular","particularly","past","per","perhaps","placed","please","plus","poorly","possible","possibly","potentially","pp","predominantly","present","previously","primarily","probably","promptly","proud","provides","put","q","que","quickly","quite","qv","r","ran","rather","rd","readily","really","recent","recently","ref","refs","regarding","regardless","regards","related","relatively","research","respectively","resulted","resulting","results","right","run","said","saw","say","saying","says","sec","section","see","seeing","seem","seemed","seeming","seems","seen","self","selves","sent","seven","several","shall","shed","shes","show","showed","shown","showns","shows","significant","significantly","similar","similarly","since","six","slightly","somebody","somehow","someone","somethan","something","sometime","sometimes","somewhat","somewhere","soon","sorry","specifically","specified","specify","specifying","still","stop","strongly","sub","substantially","successfully","sufficiently","suggest","sup","sure","take","taken","taking","tell","tends","th","thank","thanks","thanx","thats","that've","thence","thereafter","thereby","thered","therefore","therein","there'll","thereof","therere","theres","thereto","thereupon","there've","theyd","theyre","think","thou","though","thoughh","thousand","throug","throughout","thru","thus","til","tip","together","took","toward","towards","tried","tries","truly","try","trying","ts","twice","two","u","un","unfortunately","unless","unlike","unlikely","unto","upon","ups","us","use","used","useful","usefully","usefulness","uses","using","usually","v","value","various","'ve","via","viz","vol","vols","vs","w","want","wants","wasnt","way","wed","welcome","went","werent","whatever","what'll","whats","whence","whenever","whereafter","whereas","whereby","wherein","wheres","whereupon","wherever","whether","whim","whither","whod","whoever","whole","who'll","whomever","whos","whose","widely","willing","wish","within","without","wont","words","world","wouldnt","www","x","yes","yet","youd","youre","z","zero","a's","ain't","allow","allows","apart","appear","appreciate","appropriate","associated","best","better","c'mon","c's","cant","changes","clearly","concerning","consequently","consider","considering","corresponding","course","currently","definitely","described","despite","entirely","exactly","example","going","greetings","hello","help","hopefully","ignored","inasmuch","indicate","indicated","indicates","inner","insofar","it'd","keep","keeps","novel","presumably","reasonably","second","secondly","sensible","serious","seriously","sure","t's","third","thorough","thoroughly","three","well","wonder"])
word_tokens = job_description.split()
filtered_sentence = [w for w in word_tokens if not w in stop_words]
filtered_sentence = []
for w in word_tokens:
    if w not in stop_words:
        filtered_sentence.append(w)
listToStr = ' '.join([str(elem) for elem in filtered_sentence])
otherstopwords = ['position', 'experienced','languages','like','job','salary','works','manages','manage','develops','provides','clients','information','finacial','knowledge','power','certified','well','versed','good','best','better','interest','passion', 'corporate','world','great','ethics','work',
                  'difficult', 'easy', 'understand', 'system', 'perform', 'performed', 'module', 'project', 'task', 'transparency', 'maintain', 'respond', 'recover','recovery','configure', 'consistent', 'comprehend', 'efficiency','efficient','familiar', 'control','clarity','exercise', 'duty', 'duties',
                  'compatible', 'compatibility','explore', 'passionate','experiment', 'analyse', 'analysis','certified','interested','interest']
querywords = listToStr.split()
resultwords  = [word for word in querywords if word.lower() not in otherstopwords]
resultwords.sort()
reswords = np.asarray(resultwords)
#print(reswords)
length1 = len(resultwords)
#print(length1)
#Fetching from csv
with open("GeneralInfo.csv",'r') as f:
        reader = csv.reader(f)
        data = list(reader)
length2 = len(data)
#print(length2)
NameMatrix = [' ' for r in range(length2)]
Matrix = [[0 for x in range(length1 + 1)] for y in range(length2 + 1)]
k = 0
i = 0
j = 0
name = 0
while i <= length1:
    Matrix[0][i] = ' '
    i = i + 1
while j < length2 + 1:
    Matrix[j][length1] = '              '
    if j == 0:
        Matrix[j][length1] = 'decesion'
    j = j + 1
for x in data:
    x = [item.lower() for item in x]
    length3 = len(x)
    x= np.asarray(x)
    NameMatrix[name] = x[0]
    #print(k)
    set1 = set([item.lower() for item in x])
    set2 = set(resultwords)
    #print(set1.intersection(set2))
    for y in range(length1):
        for i in range(length3):
            if reswords[y] == x[i]:
                Matrix[k + 1][y] = Matrix[k + 1][y] + 1
                #SumMatrix[k][y] = SumMatrix[k][y] + 1 #Check line 35
    #print("========================================================================================")
    k = k + 1
    name = name + 1
for x in range(len(reswords)):
    Matrix[0][x] = reswords[x]
    #print(x)
z = 1
for x in range(len(NameMatrix)):
    Matrix[z][length1] = 'unselected'
    z = z + 1
#print(np.asarray(Matrix))
new_list = list()
for x in range(length2 + 1):
    my_list = list(Matrix[x])
    new_list.append(my_list)
#print(new_list)
#print("========================================================================================")
with open("Test.csv", "w") as f:
    writer = csv.writer(f)
    writer.writerows(new_list)
new_file = pd.read_csv("Test.csv")
#print(new_file.head(7))
trainingSet = []
testSet = []
with open('Train.csv') as csvfile:
        lines = csv.reader(csvfile)
        dataset = list(lines)
        for x in range(len(dataset)):
            for y in range(len(resultwords)):
                dataset[x][y] = int(dataset[x][y])
            trainingSet.append(dataset[x])
with open('Test.csv') as csvfile:
        next(csvfile)
        lines = csv.reader(csvfile)
        dataset = list(lines)
        for x in range(len(dataset)):
            for y in range(len(resultwords)):
                dataset[x][y] = int(dataset[x][y])
            testSet.append(dataset[x])
#print("Train set: {}".format(len(trainingSet)))
#print("Test set: {}".format(len(testSet)))
predictions = []
k = 2
#print('\n The predictions are: ')
for x in range(len(testSet)):
        neighbors = getNeighbors(trainingSet, testSet[x], k)
        result = getResponse(neighbors)
        predictions.append(result)
        #print('Name: '+ NameMatrix[x]+', predicted: ' + repr(result))
accuracy = getAccuracy(testSet, predictions)
#print(predictions)
with open("Test.csv", 'r') as f:
    next(f)
    reader = csv.reader(f)
    your_list=list(reader)
concepts = list()
for i in your_list:
        i.remove(i[-1])
        concepts.append(i)
##print(concepts)
final_listu = list()
final_lists = list()
for x in range (len(predictions)):
    a = list()
    a = list(concepts[x])
    if predictions[x] == 'unselected':
        a.append('unslected')
        final_listu.append(a)
    else:
        a.append('selected')
        a.append(NameMatrix[x])
        final_lists.append(a)

#print(final_listu)
#print(final_lists)
with open("Train.csv", "a") as f:
    writer = csv.writer(f)
    writer.writerows(final_listu)
myyy = list()
for listitem in final_lists:
    myyy.append(listitem[-1])
my_string = ','.join(myyy)
with open('listfile.txt', 'w') as filehandle:
    filehandle.write(my_string)