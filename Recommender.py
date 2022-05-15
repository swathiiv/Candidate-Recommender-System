import pandas as pd
import numpy as np
import sys
import csv
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
res = list(reswords)
res.append('decesion')
#print(reswords)
length1 = len(resultwords)
#print(length1)
#Fetching from csv
with open("GeneralInfo.csv",'r') as f:
        reader = csv.reader(f)
        data = list(reader)
length2 = len(data)
#print(length2)
#Matching attributes to create a matrix
NameMatrix = [' ' for r in range(length2 + 1)]
Matrix = [[0 for x in range(length1 + 1)] for y in range(length2 + 1)]
SumMatrix = [[0 for x in range(length1)] for y in range(length2)]
k = 0
i = 0
j = 0
NameMatrix[0] ='skills'
name = 1
while i <= length1:
    Matrix[0][i] = '                '
    i = i + 1
while j <= length2:
    Matrix[j][0] = '                '
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
                Matrix[k + 1][y + 1] = Matrix[k + 1][y + 1] + 1
                SumMatrix[k][y] = SumMatrix[k][y] + 1
    #print("========================================================================================")
    k = k + 1
    name = name + 1
ConvertToCsv = np.transpose(Matrix)
for x in range(len(NameMatrix)):
    ConvertToCsv[0][x] = NameMatrix[x]
y = 1
z = 0
while z < len(reswords):
    ConvertToCsv[y][0] = reswords[z]
    z = z + 1
    y = y + 1
best_candidate_decider = list()
#print("===============================================================================================")
new_list = list()
for x in range(length1 + 1):
    my_list = list(ConvertToCsv[x])
    new_list.append(my_list)
#print(new_list)
#print("=============================================================================================")
with open("Recommend.csv", "w") as f:
    writer = csv.writer(f)
    writer.writerows(new_list)
new_file = pd.read_csv("Recommend.csv")
#print(new_file.head())
#print("=============================================================================================")
SumMatrix = np.transpose(SumMatrix)
for x in range(length2):
    sum = 0
    for y in range(length1):
        sum = sum + SumMatrix[y][x]
    best_candidate_decider.append(sum)
#best_candidate_decider.sort(reverse=True)
#print(best_candidate_decider)
my_dict = {}
y= 1
for x in range(len(best_candidate_decider)):
    my_dict[NameMatrix[y]] = [best_candidate_decider[x]]
    y = y + 1
#print(my_dict)
# setting first name as index column
new_file.set_index("skills", inplace=True)
#print(new_file.head())
#print("================================================================================================")
Keymax = max(my_dict, key=my_dict.get)
#print(Keymax)#Printing the candidate with maximum value score
candidate = new_file[Keymax]
#print(candidate.head())
resume_like_candidate = new_file.corrwith(candidate)
corr_candidate = pd.DataFrame(resume_like_candidate, columns=['Correlation'])
corr_candidate.dropna(inplace=True)
corr_candidate.head()
#print("**************************************************************************************************************")
#print(corr_candidate.head())
#print("**************************************************************************************************************")
#print(corr_candidate.sort_values('Correlation', ascending=False).head(10))
ar = (np.asarray(corr_candidate.head(10)))
#print(ar)
Sum1 = SumMatrix.transpose()
final_list = list()
for x in range (len(ar)):
    a = list()
    a = list(Sum1[x])
    if ar[x] > 0.4:
        a.append('selected')
    else:
        a.append('unselected')
    final_list.append(a)
#print(final_list)
with open("Train.csv", "a") as f:
    writer = csv.writer(f)
    writer.writerows(final_list)

