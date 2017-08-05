Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
Contents lists available at ScienceDirect
<p>
Engineering Science and Technology,
<p>
an International Journal
<p>
j o u r n a l h o m e p a g e : w w w . e l s e v i e r . c o m / l o c a t e / j e s t c h
<p>
Review
Artiﬁcial neural network applications in the calibration of spark-ignition
engines: An overview
Richard Fiiﬁ Turkson a,b,c,⇑
<p>
, Fuwu Yan a,b, Mohamed Kamal Ahmed Ali a,b,d, Jie Hu a,b
<p>
a School of Automotive Engineering, Wuhan University of Technology, Wuhan 430070, China
b Hubei Key Laboratory of Advanced Technology for Automotive Components, Wuhan University of Technology, Wuhan 430070, China
c Mechanical Engineering Department, Ho Polytechnic, P.O. Box HP 217, Ho, Ghana
d Automotive and Tractors Engineering Department, Faculty of Engineering, Minia University, 61111 El-Minia, Egypt
<p>
a r t i c l e
<p>
i n f o
<p>
a b s t r a c t
<p>
Article history:
Received 26 November 2015
Revised 24 February 2016
Accepted 13 March 2016
Available online 16 April 2016
<p>
Keywords:
Artiﬁcial neural networks
Applications
Spark-ignition engines
Calibration
<p>
Emission legislation has become progressively tighter, making the development of new internal combustion engines very challenging. New engine technologies for complying with these regulations introduce
an exponential dependency between the number of test combinations required for obtaining optimum
results and the time and cost outlays. This makes the calibration task very expensive and virtually impossible to carry out. The potential use of trained neural networks in combination with Design of
Experiments (DoE) methods for engine calibration has been a subject of research activities in recent
times. This is because artiﬁcial neural networks, compared with other data-driven modeling techniques,
perform better in satisfying a majority of the modeling requirements for engine calibration including the
curse of dimensionality; the use of DoE for obtaining few measurements as practicable, with the aim of
reducing engine calibration costs; the required ﬂexibility that allows model parameters to be optimized
to avoid overﬁtting; and the facilitation of automated online optimization during the engine calibration
process that eliminates the need for user intervention. The purpose of this review is to give an overview
of the various applications of neural networks in the calibration of spark-ignition engines. The identiﬁed
and discussed applications include system identiﬁcation for rapid prototyping, virtual sensing, use of
neural networks as look-up table surrogates, emerging control strategies and On-Board Diagnostic
(OBD) applications. The demerits of neural networks, future possibilities and alternatives were also
discussed.
Ó 2016 Karabuk University. Publishing services by Elsevier B.V. This is an open access article under the CC
BY-NC-ND license (http://creativecommons.org/licenses/by-nc-nd/4.0/).
<p>
Contents
<p>
1.
2.
<p>
3.
<p>
Introduction . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1347
Artificial neural network theory . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1348
The perceptron model. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1348
2.1.
Single- and multi-layer perceptron feedforward networks . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1348
2.2.
2.3.
Radial-basis function neural networks. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1349
Recurrent neural networks . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1349
2.4.
Neural network learning algorithms . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1350
2.5.
Learning algorithms for multi-layer feedforward networks. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1350
2.5.1.
2.5.2.
Learning in recurrent neural networks . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1351
Neural network applications in the development of engine management systems. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1351
System identification for accelerated system development . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1351
3.1.
Virtual sensing and electronic control look-up table surrogates . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1353
3.2.
3.3.
Emerging control strategies . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1353
<p>
⇑ Corresponding author at: School of Automotive Engineering, Wuhan University of Technology, Wuhan 430070, China.
<p>
E-mail addresses: riturkus@yahoo.com, rturkson@hopoly.edu.gh (R.F. Turkson).
Peer review under responsibility of Karabuk University.
<p>
http://dx.doi.org/10.1016/j.jestch.2016.03.003
2215-0986/Ó 2016 Karabuk University. Publishing services by Elsevier B.V.
This is an open access article under the CC BY-NC-ND license (http://creativecommons.org/licenses/by-nc-nd/4.0/).
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
1347
<p>
4.
<p>
5.
<p>
3.4.
On-Board Diagnostic applications . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1355
Demerits and challenges of artificial neural networks. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1355
4.1. Model generalization ability and prediction accuracy . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1356
Conclusions and outlook . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1357
Acknowledgments . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1357
References . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . 1357
<p>
1. Introduction
<p>
An ever tightening emission legislation requirements around
the globe coupled with an increasing customer desire for improved
vehicle performance has been among the drivers of new engine
technologies [74,108,125]. New technologies include the use of
variable cam timing/phasing, variable valve timing/lift, variable
intake manifold length, charge motion valves for inducing swirl
and direct gasoline injection systems with variable injection timing
[65,59,53,1,39,43,100,3,88,20,52,73,133,48]. As the number of
actuators associated with these new technologies increases, it
introduces an exponential dependency between the time and cost
outlays for mapping such complex (high degree of freedom)
engines. Furthermore, the increase in the number of the degrees
of freedom increases the number of input and output combinations
that would have to be tested in order to achieve the calibration
objective, making the calibration task virtually impossible. One
way of dealing with the increasing complexity in the engine calibration and mapping task is to use the model-based calibration
approach which involves the use of statistical methods of Design
of Experiments (DoE) methodology [80,115,57,76,36,40],
for
reducing the number of engine tests that would be representative
of the entire operating space. The traditional look-up tables resulting from the calibration and engine mapping process increase in
size with an increase in engine complexity leading to an increase
in the electronic control unit (ECU) memory space required for
storing the look-up tables [5,122]. The use of look-up tables does
not guarantee output accuracy over the operating range of an
engine. Furthermore, it is not easy to improve accuracy by establishing the complex relationships between the input variables.
The noisy nature of parameters used in the data acquisition system
of a dynamometer test grid may compound the accuracy problem
further. Trained artiﬁcial neural networks present a black-box
approach [136] for matching sensor inputs with outputs in a
non-linear manner that is free from noise [121,86]. For this reason,
artiﬁcial neural networks are gaining attention for producing
outputs that are accurate regardless of the variation in input
parameters [91,8,7,137].
<p>
Artiﬁcial neural networks represent one of three modeling
techniques. These techniques include white-, gray- and black-box
modeling with neural networks belonging to the latter technique.
The difference between these techniques is the level of physical
knowledge available about the model and the extent to which
the user could interpret the models. The white-box modeling
technique relies on the use of physical laws in establishing the
relationships between variables and parameters. Similarly, in a
black-box model, it is possible to match inputs to outputs without
any clear knowledge about the relationship between the inputs
and corresponding outputs. Furthermore, gray-box models are
in-between the white- and black-box modeling techniques, in
terms of the level of model transparency [77,50,104,96,37,17].
<p>
It is evident from Fig. 1 that white-box models have the highest
transparency level regarding the extent to which the model
is understood, with black-box models having the lowest
<p>
transparency levels. In-between these two extremes, come graybox models with a transparency level
lying between that of
white- and black-box models. The lack of transparency on the part
of artiﬁcial neural networks comes in handy in situations where it
is virtually impossible to obtain a description of the various parts
of a system using physical equations as in the case of white- and
gray-box modeling. The black-box modeling approach presented
by artiﬁcial neural networks allows the input and output relationship to be modeled with no concern over the physical details of
system parts.
<p>
Furthermore, artiﬁcial neural networks represent one of two
classical data-driven modeling techniques, with polynomial
regression models representing the other. While polynomial
regression models are able to approximate the input–output relationship fairly well for steady-state engine operation, it is not able
to capture the non-linearity in a global engine model satisfactorily.
This is normally due to the fact that polynomial models could be
prone to measurement errors including noise and outliers. As an
alternative, artiﬁcial neural networks are able to capture the
non-linear behavior better than polynomial regression models.
However, a great deal of know-how is required for training the
artiﬁcial neural networks in a manner that avoids overﬁtting and
free from measurement errors [58,112].
<p>
According to Berger [17], while additional layers of neurons
could be used to ensure that an artiﬁcial neural network model
is ﬂexible enough to capture the non-linear behavior of an engine,
Bayesian regularization methods could be used to avoid overﬁtting
[49] which results as the number of model parameters (weights
and biases) increases. Regularization would make the neural
network behave as if it had fewer parameters for the avoidance
of overﬁtting and combining this with an increased number of neuron layers makes an artiﬁcial neural network robust to errors
resulting from noisy data measurements. The requirements of
engine modeling include the curse of dimensionality; the use of
DoE for obtaining few measurements as practicable, with the aim
of reducing engine calibration costs; the required ﬂexibility that
allows model parameters to be optimized to avoid overﬁtting;
and the facilitation of automated online optimization during the
engine calibration process. While the Gaussian Process modeling
technique [16] satisﬁes the aforementioned modeling requirements for engine calibration, there are situations in which other
data-driven non-linear modeling techniques could be useful.
Berger [17] proffered that in the event that it is difﬁcult to establish
a Gaussian Process model because of a large number of measurements, alternative non-linear modeling methods like artiﬁcial
neural networks, relevance vector machines (RVM) or support
vector machines (SVM) could be used. Furthermore, while it is
prudent to use a polynomial regression model for problems with
a low degree of complexity, it is important to use a local linear
model to solve problems that require human intervention for a
large number of measured data. The aim of this review is to give
an overview of relevant neural network theory and outline the
main applications in the area of spark-ignition engine management
system development.
<p>
1348
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
output signal of the neuron model within a range of [0, 1] or [ 1,
1]. The input to the neuronal model also includes a bias b, for controlling the magnitude of the input g for the activation function f.
The magnitude of g is increased when the bias is positive and is
decreased when the bias is negative [22,105,60,93].
<p>
The following equations could be used to describe the neuronal
<p>
model shown in Fig. 2:
tk ¼
<p>
xiwik
<p>
Xn
<p>
i¼1
<p>
ð1Þ
<p>
a ¼ fðtk þ bÞ
ð2Þ
where, xi represents the inputs and wik the weights. The sum of the
weighted inputs is represented by tk; the activation function by f;
the bias by b and the model output by a. The following equation
is also valid for the neuron model in Fig. 2:
ð3Þ
gk ¼ tk þ b
where gk represents the output of the addition block shown in
Fig. 2.
<p>
The output of the neuron model in Fig. 2 is deﬁned by the activation or transfer function denoted by f. The activation function is
usually one of different types including the Heaviside, Piecewiselinear, Log-sigmoid and the Tan-sigmoid functions as shown in
Table 1.
<p>
The Tan-sigmoid function is derived from the Log-sigmoid function with both functions representing the most commonly used
activation functions for the design of artiﬁcial neural networks.
According to Haykin [60], allowing the output of a neuronal model
(using the Tan-sigmoid function) to assume values between  1
and 1, rather than between 1 and 0 (for the Log-sigmoid function)
yields additional analytical beneﬁts.
<p>
Another type of activation function is the Gaussian type of function that is normally used in radial basis function (RBF) neural networks. The Gaussian function is the probability density function of
a randomly normally distributed variable having an expected value
or mean (l) and a variance (r2) as indicated in Table 1 [79,107].
<p>
Fig. 1. Different model types and their different levels of transparency. Adapted
from Giustolisi et al. [50]; Shahin et al. [117].
<p>
Fig. 2. The perceptron model.
<p>
2. Artiﬁcial neural network theory
<p>
2.2. Single- and multi-layer perceptron feedforward networks
<p>
A neural network comprises a single or a number of interconnected neurons similar to those found in biological nervous
systems. A neural network can be trained to respond to a number
of given inputs without any particular mathematical relationship
between the inputs and outputs. The taxonomy of artiﬁcial neural
networks is such that they could be classiﬁed broadly into two
classes: feedforward and recurrent neural networks. Feedforward
neural networks could further be classiﬁed into single-layer perceptron networks, multi-layer perceptron networks and radial
basis function networks. Similarly, recurrent neural networks
could also be classiﬁed further into competitive and Hopﬁeld type
of networks, together with other network types [75,34]. Variants of
both neural network classiﬁcations ﬁnd applications in the design
and development of engine management systems and would
therefore be described in subsequent sections.
<p>
2.1. The perceptron model
<p>
Perceptron models are considered as the building blocks for
artiﬁcial neural networks. The perceptron model (Fig. 2) comprises
synaptic links which allow the inputs ðx1; x2; . . . ; xnÞ to be weighted
by applying the weights ðw1; w2; . . . ; wnÞ. Other features of the
perceptron model include the block for adding the weighted input
signals and an activation function for limiting the amplitude of the
<p>
As mentioned earlier, single- and multi-layer perceptron networks are types of feedforward neural networks [66,13,69,70].
For a single-layer feedforward network, there is an input layer
and an output layer. The input layer is not counted since no
computation takes place in this layer. There is a unidirectional
connection between the input nodes, in a single-layer network,
and the output layer of neurons. Fig. 3 shows the layout of a
single-layer feedforward network having three nodes in the input
layer and three neurons in the output layer.
<p>
The main distinction between a single-layer and multi-layer
feedforward network is that the latter could have either two or
more layers of hidden neurons. Multi-layer feedforward neural
networks have input signals applied to the ﬁrst hidden layer of
computational neurons. The weighted output from the ﬁrst layer
of neurons serves as the input for the next layer of neurons. It
has been established that increasing the number of hidden layers
improves the ability of the network (in terms of capturing the
non-linear dependencies between the inputs and outputs), especially in the case when there is a large number of network inputs
[32,60]. The layout of a multi-layer feedforward network is shown
in Fig. 4. This network could be described as a 3-3-2 type of
network because it has three input nodes, three neurons in the
only hidden layer and two neurons in the output layer.
<p>
The beneﬁts that may accrue via the use of multi-layer feedfor<p>
ward artiﬁcial neural networks include the following:
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
1349
<p>
Table 1
Neuron model activation function types.
<p>
Activation function type
<p>
Heaviside function
<p>
Graph
<p>
Piecewise-linear function
<p>
Log-sigmoid function
<p>
Tan-sigmoid function
<p>
Gaussian function
<p>
1. With the availability of data, feedforward networks could be
<p>
used for modeling a broad spectrum of systems.
<p>
2. Feedforward neural networks could be useful for applications
<p>
where analytical methods are yet to be discovered.
<p>
3. Using a suitable neural network size, it is possible to capture the
non-linear dependencies between the input and outputs to a
reasonable degree of accuracy.
<p>
2.3. Radial-basis function neural networks
<p>
Radial basis function neural networks are one of the variants of
feedforward neural network types. Such neural networks are used
for executing mapping functions of the form f: Rn ! R based on
the following equation:
fðxÞ ¼ W 0 þ
<p>
W iuðjjx   cijjÞ
<p>
Xm
<p>
ð4Þ
<p>
i¼0
<p>
where x e Rn represents the input vector, u() is a non-linear transformation function, kk represents the Euclidean distance, Wi having
a range of 1 6 i 6 m represents the weights, ci e Rn having a range of
1 6 i 6 m denotes the kernel nodes or centers, with m representing
the number of kernel nodes. A radial basis function network based
on Eq. (4) is shown in Fig. 5.
<p>
Equation(s)
<p>
fðgkÞ ¼ 1; if gk P 0
0; if gk < 0
<p>
8<
:
<p>
8>><
>>:
<p>
fðgkÞ ¼
<p>
1; if gk P þ 1
gk; if þ 1
0; if gk 6   1
<p>
2
<p>
2
<p>
2
<p>
> gk >   1
<p>
2
<p>
1þe
<p>
1
ð agk
<p>
fðgkÞ ¼
The slope of the graph is determined by the constant a
for 0 6 fðgkÞ 6 1
<p>
Þ
<p>
fðgkÞ ¼ tanhðgkÞ ¼ egk  e
egk þe
For  1 6 fðgkÞ 6 1
<p>
 gk
 gk
<p>
r
<p>
ﬃﬃﬃﬃﬃ
fðgkÞ ¼ 1
p e ðgk lÞ2 =ð2r2Þ
2p
where r ¼ standard deviation
l ¼ mean or expected value
and r2 ¼ variance
<p>
For the radial basis function neural network shown in Fig. 5, the
least square method [6,31,132,25] could be used in determining
the weights Wi by ﬁxing the centroids ci and the function for
non-linear transformation of the inputs u() and applying the
inputs and target outputs to the network [26,107,135,27,18]. The
prime beneﬁt of using radial basis function feedforward neural
networks is the reduced time required for training which results
from the simpler structure of these networks compared to the
multi-layer perceptron networks described earlier. Radial-basis
functions also have comparatively low extrapolation errors and
are generally more reliable.
<p>
2.4. Recurrent neural networks
<p>
As mentioned earlier, recurrent neural networks represent the
second broad classiﬁcation of neural networks. These network
types will normally have one or more feedback loops with unit 1 (Fig. 6). In its simplest form, a
delay operators represented by z
recurrent neural network comprises a single layer of neurons with
output signals from each serving as input signals for other neurons
of the network as shown in Fig. 6.
<p>
Another variant of this network type is to have the output
of each neuron channeled back to its input. Other recurrent neural
networks may have one or more hidden layers akin to multi-layer
<p>
1350
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
Fig. 3. Single-layer feedforward neural network.
<p>
Fig. 5. Radial basis function feedforward neural network.
<p>
Fig. 6. Single-layer recurrent neural network.
<p>
Fig. 4. Multi-layer feedforward network.
<p>
feedforward networks and are normally used for modeling the
non-linear dynamical behavior of systems [129,46,60]. Recurrent
neural networks have a very high level of computational power
and could be used to model virtually any non-linear dynamical
system to any degree of accuracy. With the use of sufﬁcient hidden
layers, the modeling is normally without any restrictions on the
size of the state space.
<p>
spectrum of practical problems. This learning algorithm involves
the forward propagation of input signals, computing the error
signal (difference between target output and actual output) and
backpropagating the error until the error signal is minimized for
a number of training iterations or epochs. For a feedforward
network having an output yk
i in the ith neuron of layer k and a bias
bk
i , the relationship between the input and output of the network
could be represented as follows:
<p>
#
<p>
ðk 1Þ
w
ij
<p>
ðk 1Þ
j
<p>
y
<p>
þ bk
<p>
i
<p>
"
¼ u
<p>
Xk 1
<p>
j¼1
<p>
2.5. Neural network learning algorithms
<p>
yk
i
<p>
ð5Þ
<p>
Apart from knowledge representation and reasoning, the ability
to learn is a vital feature of artiﬁcial intelligence systems. The definition of learning could be varied and relative. However, from an
artiﬁcial neural network viewpoint, learning could be described
as the process of adjusting the network’s parameters (weights
and biases) such that desired outputs could be predicted based
on a given number of inputs and within acceptable limits of error.
The manner in which the network weights are adjusted determines
the learning algorithm type [72,60]. Since the solution to most
practical problems involve the use of multi-layer feedforward
and recurrent neural networks, the subsequent sections will
attempt a discussion of the learning algorithms used for these
two major classes of neural networks.
<p>
ðk 1Þ
where u is the activation function, w
represents the weight
ij
input from the neuron j of the layer denoted by k   1 to the neuron
ðk 1Þ
denoting the output of the
i of the layer represented by k with y
j
neuron j in layer k   1.
If a training set of data has vector inputs ðx1; x2; . . . ; xnÞ and target vector outputs ðy1; y2; . . . ; ynÞ, then the weights of the network
could be iteratively adjusted until the network is able to match
each network input x(k) with a target output y(k) with a minimum
of error. For the backpropagation algorithm, the error between the
input signal and the target output could be deﬁned as follows:
E ¼
<p>
Xn
jjyk   yLjj2
<p>
ð6Þ
<p>
n¼1
<p>
2.5.1. Learning algorithms for multi-layer feedforward networks
<p>
The backpropagation learning algorithm is popular with supervised learning paradigms and has proven to be useful for solving a
<p>
From Eq. (6), it could be said that for an input value of x(k) we
have a corresponding network output vector of yL. The training of a
neural network via the backpropagation algorithm starts with
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
1351
<p>
setting the network weights to small random values and then
updating the weights repeatedly until the error E is minimized
[72,111,24]. The weights and biases are adjusted using the gradient
descent method [10,21,15] as follows:
<p>
system control, pattern recognition and system optimization as
well as model-based engine calibration applications. The subsequent sections will focus on artiﬁcial neural networks and their
applications in the area of spark-ignition engine calibration.
<p>
ðk 1Þ
w
ij
<p>
ðp þ 1Þ ¼ w
<p>
ðk 1Þ
ij
<p>
ðpÞ   g
<p>
@E
ðk 1Þ
@w
ij
<p>
ðp þ 1Þ ¼ bk
<p>
i
<p>
bk
i
<p>
ðpÞ   g
<p>
@E
@bk
i
<p>
where g represents the step size.
<p>
ð7Þ
<p>
ð8Þ
<p>
With weight update according to the delta rule [113,116], the
network weights and biases could be updated according to the
following equations:
ðk 1Þ
ij
<p>
ðp þ 1Þ ¼ w
<p>
ðpÞ þ gdk
i y
<p>
ðk 1Þ
w
ij
<p>
ðk 1Þ
j
<p>
ð9Þ
<p>
i
<p>
i
<p>
bk
i
<p>
ðpÞ þ gdk
<p>
ðp þ 1Þ ¼ bk
For Eqs. (9) and (10), dk
<p>
ð10Þ
i represents the error for the ith neuron
and the layer k. The following equation could be used to determine
the error in the last layer K:
þ bK
<p>
yðK 1Þ
<p>
ð11Þ
<p>
ðK 1Þ
w
jz
<p>
z
<p>
dK
j
<p>
j
<p>
The error term for the rest of the layers is determined through
<p>
backpropagation based on Eq. (12).
<p>
ðk 1Þ
d
j
<p>
ðk 2Þ
w
jz
<p>
yðk 2Þ
<p>
z
<p>
þ b
<p>
ðk 1Þ
j
<p>
ðwk 1
jz dk
z
<p>
Þ
<p>
ð12Þ
<p>
z¼1
<p>
"
¼ u0 XK 1
"
¼ u0 Xk 2
<p>
z¼1
<p>
j
<p>
Þ
<p>
#
ðyj   yK
#Xk
<p>
z¼1
<p>
2.5.2. Learning in recurrent neural networks
<p>
One distinguishing feature of a recurrent neural network is its
ability to characterize non-linear dynamical systems. One of the
learning algorithms used for recurrent neural networks is the
Backpropagation Through Time (BPTT) algorithm [128,12,33]. This
algorithm is derived from the backpropagation learning algorithm
used for feedforward neural networks based on gradient descent
methods. The BPTT algorithm requires that the network weights
and biases are adjusted based on network states and inputs at
previous time steps. For a recurrent neural network which is
trained for a time interval that spans between t1 and tn, Eq. (13)
could represent the total cost function.
Eðt1; tnÞ ¼
<p>
Xtn
EstepðtÞ
<p>
ð13Þ
<p>
t¼t1
<p>
where the total cost function is the sum of errors for each time step,
Estep (t), from t1 to tn.
<p>
Applying the gradient descent method, the network weights are
<p>
adjusted from previous time steps based on Eq. (14).
Dwij ¼  g
<p>
@Eðt1; tnÞ
<p>
¼  g
<p>
@EstepðtÞ
@wij
<p>
@wij
<p>
Xtn
<p>
t¼t1
<p>
ð14Þ
<p>
With the BPTT algorithm, online learning takes place in which
the weights are adjusted for each time step. A pre-requisite for this
to take place is to memorize previous input states at previous time
steps.
<p>
3. Neural network applications in the development of engine
management systems
<p>
Artiﬁcial neural networks have received a lot of attention in
recent years for solving scientiﬁc problems including prediction,
<p>
3.1. System identiﬁcation for accelerated system development
<p>
According to Rutherford and Cole [114] artiﬁcial neural networks have become attractive for non-linear system identiﬁcation
for modeling and optimal control purposes. The methods of Design
of Experiments (DoE) have been used to obtain a reduced number
of experiments that could be conducted using a dynamometer but
this is only ideal for steady state conditions. In order to obtain
information about the dynamic behavior of an engine (including
transients), it would be necessary to run the engine under deﬁned
operating transient cycles and other conditions. The data collected
this way could then be used in training neural networks that would
represent the dynamic response of the real engine to inputs and
could be used for ofﬂine optimization of the calibration process.
It is also possible to use neural networks in the area of feedback
control systems. For this particular application, neural networks
are used to capture the non-linear relationships between inputs
and outputs of the identiﬁed system in a way that makes it easy
to calibrate the PID control gains [97]. Wu et al. [130] proposed
the use of an artiﬁcial neural network for determining the air ﬂow
rate for a variable valve timing spark-ignition engine. The proposed
method involved the training of an artiﬁcial neural network (ANN)
model with data obtained from the steady-state testing of the
engine. The inputs for training the ANN model included engine
speed, manifold absolute pressure, intake and exhaust camshaft
phasing, with the network output being the air ﬂow rate. After
using a heuristic approach it was shown in the study [130] that
the chosen ANN architecture (4-8-8-1) for the model was able to
predict air-ﬂow rate accurately (within an error margin of ±10%)
for all the input variables considered. Even though the method
used for
selecting the preferred neural network structure
employed a trial and error approach, it corresponds to the explicit
method of optimizing the structure of an artiﬁcial neural network.
The explicit method involves the gradual increase in the number of
hidden neurons and/or layers and observing the training and test
errors as the size of the network grows larger.
<p>
Another way in which neural networks could be used for system identiﬁcation for speeding up the calibration process through
the use of a virtual engine which correlates well with a target
engine and the subsequent use of the virtual engine for running
high ﬁdelity simulations was reported in the study conducted by
Wu et al. [131]. In this study [131] an attempt was made to maximize engine torque at selected engine speeds at a wide throttle
opening. Four input variables were optimized at the same time
but the focus was on achieving an optimum cam phasing as this
had a direct effect on the volumetric efﬁciency. The inputs used
in this case included intake cam position, exhaust cam position,
throttle angle and engine speed with engine torque as the output.
The optimization framework used by the study required the determination of the various input combinations for the high-ﬁdelity
engine model using a Latin Hypercube Sampling technique
[61,44,71] which assumes that there is a uniform distribution of
input combinations over the entire operating range under consideration [131,95]. In order to reduce the computational time, which
may result if the high-ﬁdelity engine model were used directly for
the optimization effort, the simulation results were used for the
training of an artiﬁcial neural network surrogate model which
had the capability of predicting the response from the highﬁdelity engine model as a function of the various independent
input variable combinations. After comparing neural network
models with different levels of complexity in terms of the number
<p>
1352
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
of neurons in the hidden layers and the number of hidden layers,
the chosen neural network had a structure of 5-10-10-1. It is worth
noting that the difference between the works reported by Wu et al.
[130] and Wu et al. [131] lies in the introduction of a virtual system
(high-ﬁdelity engine model) for generating data for training the
artiﬁcial neural network surrogate model. It is also worth noting
that the number of neuron layers was the same (4) for both studies
except for an increase in the number of neurons in the ﬁrst three
layers from 4, 8, 8 to 5, 10, 10 in the latter study [131]. This indicated that a slightly more ﬂexible neural network structure was
required for capturing the non-linear behavior of the system being
modeled in the latter study. Although there was no mention of
speciﬁc ﬁt statistics in the study carried out by Wu et al. [131], it
was stated that the use of three hidden-layer neural networks
yielded lower mean squared errors for both training and testing
in comparison with two- and one-hidden layer neural networks.
Furthermore, it is also worth pointing out that in both studies
[130,131] the number of inputs (4) for predicting single outputs
were the same and consistent with the input dimensional requirements for engine calibration. While the study conducted by Wu
et al. [130] generated experimental data involving 4789 operating
points for neural network training and testing purposes, Wu et al.
[131] employed an automated system for generating data for fewer
number of test combinations (1025 via Latin Hypercube Sampling)
required for training the neural networks. The former approach for
data collection would require an extensive use of dynamometer
tests, the cost of which could be justiﬁed by a reduced neural network model error as a result of the higher number of experimental
data collected (See Section 4.1). It is also worth pointing out that
while the fewer test combinations obtained by the latter approach
would be statistically representative of the operating space considered, the use of the high-ﬁdelity engine model could also avoid the
extensive dynamometer tests, ultimately leading to a reduction in
the cost outlays for data collection.
<p>
An example of system identiﬁcation and characterization using
neural networks is demonstrated by a study conducted by
Papadimitriou et al. [106] in which a metamodeling or model
reduction process [120] was used to simplify computationally
expensive engine parts. This way, it was possible to increase the
computational speed of the model while preserving its ﬁdelity to
a large extent. The objective of the model reduction process was
to achieve a fast-running model for rapid control prototyping
applications involving Hardware-In-the-Loop (HIL) and SoftwareIn-the-Loop (SIL) testing [134,119,2,64]. Model reduction via
metamodeling was achieved by replacing the intake and exhaust
manifolds and the engine cylinders with mean value models. This
form of system identiﬁcation used by Papadimitriou et al. [106]
was similar to that reported by Wu et al. [131] with respect to
the use of DoE simulation results for training neural networks.
The difference was in the replacement of the high-ﬁdelity engine
model with a fast-running mean-value engine model in the work
of Papadimitriou et al. [106]. It is worth noting that a distinguishing feature of the study conducted by Papadimitriou et al. [106]
was the iterative construction and training of different neural networks and selecting the best performing network based on speed
and accuracy criteria. The use of a fast-running mean-value engine
model in place of a high-ﬁdelity one could lead to a reduction in
the required simulation time for data collection. The resulting beneﬁts would be more valuable given that in the shift to the use of
the fast-running model, ﬁdelity is preserved to a large extent.
The inputs for training the neural network models included engine
speed, intake manifold pressure, intake manifold temperature and
air–fuel ratio. The selection of the preferred neural networks was
based on both the explicit and implicit (involving the use of regularization techniques applied to change the model complexity
without changing the nominal number of parameters used)
<p>
Fig. 7. Ofﬂine training of controller recurrent neural network using a simpliﬁed
neural network model. Adapted from Müller and Schneider [99].
<p>
methods of model structure optimization in addition to a novel
approach for automatically determining the quality of ﬁt. The
study [106] reported the qualitative and quantitative preservation
of engine performance metrics of the detailed model, with the
error for the average fuel consumption model being around 0.54%.
A study conducted by Müller and Schneider [99] described how
recurrent neural networks proposed by Narendra and Parthasarathy
[102] could be used to approximate the output torque of an engine.
Recurrent neural networks were preferred for the study due to
their dynamic nature which allowed the network to give an output
based on the inputs at any given time and the history of the system
[5,4]. Torque estimation by the recurrent neural networks was
carried out by the extraction of relevant sensor signals obtained
over the operation range of the engine. The sensor input signals
considered included in-cylinder combustion pressure, air–fuel
ratio, ignition timing, throttle angle, engine temperature, mass of
air ﬂow via intake manifold, manifold pressure, injection timing
and gear shift information. This information was used to train an
artiﬁcial neural network model to establish the nonlinear relationship between the sensor inputs and engine torque. This way, it was
possible for the dynamic neural network model to approximate the
engine output torque based on the inputs. Torque control was
achieved using a combination of a controller and dynamic neural
network models in a manner that feeds the controller with target
inputs and the actual output from the model network. The controller network computed the squared error between its inputs
and attempted to minimize the squared error via the use of the
gradient descent learning algorithm proposed by Puskorius and
Feldkamp [109]. In order to simplify the neural network for the
purpose of training the controller used for the study [99], only
the throttle was selected as the actuator for controlling the engine
output torque. The simpliﬁed neural network model was then
trained until the network was able to give the desired torque output within acceptable measurement tolerances. A similar study
conducted by Wu et al. [131] used fewer inputs (4) compared with
the increased number of inputs (9) for the study conducted by
Müller and Schneider [99]. However, the increased number of
inputs for the latter study was still consistent with the required
input dimensions (5–10 inputs) for engine calibration tasks [17].
For the same application (prediction of torque), the latter study
used a recurrent neural network having a single hidden layer of
12 neurons. This is consistent with the inherent characteristic of
recurrent neural networks regarding the ability to approximate
any dynamic system regardless of the number of hidden layers
and/or neurons used. Ofﬂine training of the controller neural
network was achieved by feeding the output of the controller
neural network to the simpliﬁed model of the engine with the
controller having the target torque, actual torque and the last
control action as inputs for deciding on how to compute the next
output as illustrated in Fig. 7.
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
1353
<p>
During the training process the difference between the target
and actual output torque was minimized through the gradient
descent method proposed by Puskorius and Feldkamp [109] with
the aim of adjusting the controller neural network weights that
would give the desired controller performance. According to
Müller and Schneider [99], the training of the controller could also
be done online using a real engine.
<p>
3.2. Virtual sensing and electronic control look-up table surrogates
<p>
It is important to use sensors to monitor the operating condition of an engine in a manner that will allow the control system
to make adjustments to the various actuators in order to achieve
the best combination between driveability, fuel economy and
emissions. When sensors are used in this manner, a number of
look-up tables are used for backup and plausibility checks for the
engine management system [110,97]. Previous studies [97,101]
proffer that an alternative to the use of sensors in an engine management system is to use trained neural networks as surrogates for
physical sensors or used as additional sensors for implementing
emerging control strategies. It was also stated that it was possible
to achieve cheap torque based engine management systems with
the use of neural networks as feedback sensors.
<p>
Virtual sensing methods for designing reliable diagnostic and
fault-tolerant control systems using recurrent neural networks
were investigated by Kamat et al. [78]. The work involved the
development and implementation of virtual models of the important spark-ignition engine input variables namely manifold
absolute pressure (MAP), mass airﬂow rate (MAF), normalized
air–fuel ratio (Lambda) and engine output torque (T). Each of the
neural network models developed had a multi-input and a single
output. For the MAP model, the inputs were fuel pulse width
(FPW), MAF, engine speed (RPM) and throttle position sensor
(TPS) signals. The MAF model had the same inputs as the MAP
model except for the replacement of the MAF input with the
MAP input signal. Similarly the Lambda model had the FPW,
MAP, MAF, TPS and RPM signals as inputs. The torque prediction
model also had the spark-timing angle, FPW, MAP, TPS and RPM
as inputs. All the recurrent neural network models were trained
with experimental data collected on a real engine, using gradient
descent methods that aimed at reducing the normalized mean
squared error between the target outputs and the actual network
output. After the training (comparing recurrent neural network
models having a single layer with different number of neurons
from 8 to 14), the neural network structures for all the models of
the virtual sensors for the prediction of manifold absolute pressure,
manifold air ﬂow rate and torque were of a single layer of 14 neurons. For the Lambda model the lowest normalized mean squared
error (NMSE) of 0.0011 was achieved while using the Federal Test
Protocol (FTP) in combination with a tuned controller. Similarly,
the minimum NMSE of 0.002 was achieved for the torque model
using the FTP and a tuned controller. The MAP and MAF models
had the same and lowest NMSE (0.0006) for the same conditions
under the FTP and the use of the tuned controller. On the other
hand, inferring the air fuel ratio (lambda) from other sensor inputs
did not work well for closed loop control because of the reduced
frequency range. It was however found that the virtual lambda
sensor could be used successfully for diagnostic and faulttolerant control purposes. Kamat et al. [78] proposed that increasing the operating frequency range of the virtual lambda sensor
should be the focus of further research. In an attempt to investigate
the failure modes of the oxygen (lambda) sensor used on a gasoline
engine and its effect on fuel metering and emissions, Hu et al. [68]
used a virtual oxygen sensor based on an Elman recurrent neural
network. The virtual oxygen sensor predictions were used to make
<p>
adjustments to the air–fuel ratio in the failure modes of the
physical sensor used for the fuel system.
<p>
New technologies (such as variable cam phasing, charge motion
valves and variable intake manifold runner lengths) for improving
engine performance, fuel economy and emissions do not only make
the calibration process complex and prohibitive, but also leads to a
large memory space for storing the look-up tables resulting from
the calibration process. According to Meyer and Greff [97], it has
been established through investigations that artiﬁcial neural
networks occupy less of the random access memory space than
conventional
look-up tables and that equation-based neural
networks will replace look-up tables in the future. In the work of
Malaczynski et al. [91], artiﬁcial neural networks were used to
model real-time volumetric efﬁciency of a target engine. The
possibility of using an artiﬁcial neural network surrogate to derive
volumetric efﬁciency for an engine equipped with variable valve
actuation was investigated. The inputs to the neural network
model included valve lift, intake valve phasing, exhaust valve phasing and the ratio of absolute exhaust pressure to absolute intake
manifold pressure. While the study reported the use of a single
hidden-layer of neurons no information regarding the number of
neurons was reported for the feedforward neural network. The
choice of a single layer of hidden neurons for this application in
combination with the linear activation function for the output neuron was motivated by the desire to operate the neural network in
real
time without consuming a high amount of processing
resources. In an attempt to reduce the mean squared error that
could result from the continuously variable nature of the inputs,
vector quantization was employed for the approximation of
continuous-amplitude signals with discrete amplitude signals. It
was shown that the trained neural network surrogate proved to
be a good replacement for look-up tables, with the training
absolute mean squared error below 5% for a majority of the cases
considered. However,
implementation of the neural network
algorithm for evaluating volumetric efﬁciency was prone to the
limitations of available automotive computers in terms of random
access memory, read only memory, computational resources and
ﬁxed-point math [41]. In the work of El Hadef et al. [40] an artiﬁcial
neural network was proposed for predicting the volumetric
efﬁciency of a downsized, turbo-charged spark-ignition engine.
Steady-state and transient engine operating points were used for
model validation with only steady-state engine operating points
being used for model calibration. It was found that the model
predicted volumetric efﬁciency satisfactorily while satisfying the
computational requirements of modern automotive processors. El
Hadef et al. [40] also noted that in spite of the fact that statistical
Design of Experiments could be used to reduce the training data
set without any adverse effect on model ﬁdelity, it is imperative
to further analyze and determine the minimum number of points
that would yield the best results for each case.
<p>
3.3. Emerging control strategies
<p>
Proportional, Integral and Derivative (PID) control systems have
been used in the past for closed-loop engine management systems.
The limitation of such PID systems is the effort required to calibrate the PID gains to give the required system response for a given
set of controller inputs. Feedback control systems based on neural
networks have been identiﬁed for an enhanced control system
performance, particularly in situations where there is a delay
introduced by slow sensor dynamics in relation to the measured
quantity [97,14,89,90]. In order to ensure that the catalytic converter efﬁciency stays fairly high, it is important to use an air–fuel
ratio that is close to stoichiometric. Air–fuel control was normally
achieved using the signal from a lambda sensor for either enriching
or weakening the air–fuel mixture. However, the dynamic nature
<p>
1354
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
Fig. 8. A closed-loop control system using a neural network controller [97].
<p>
Fig. 9. Use of a trained inverse neural network model for feedforward control. Adapted from Meyer and Greff [97].
<p>
Fig. 10. Layout of a hybrid system for fuel injection control. (Adapted from Wendeker and Czarnigowski [127]). Where k = excess air factor; kA = regulator output for
controlling model; Dtinj = injection pulse width; N = engine speed; MAP = manifold absolute pressure; dMAP = transient manifold pressure (computed by ﬁnding the difference
between the measured MAP signal and the average MAP measured over a deﬁne number of engine cycles.
<p>
of engines coupled with its changing operating conditions
makes it difﬁcult for the control system to reconcile the oxygen
content in the exhaust gas and the gravimetric air–fuel ratio under
dynamic conditions. Neural networks can be used to achieve
control systems that will minimize the deviation of the air–fuel
ratio from that which is stoichiometric while keeping under
<p>
control factors that may cause a variation in the exhaust gas
composition notwithstanding the dynamic behavior of the engine
[127,28,29,30,51,62,85,97]. The layout of a neural network system
for control purposes was proposed in the work of Meyer and Greff
[97] in which a neural network controller could be used to
compensate for the steady state and dynamic behavior of the plant
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
1355
<p>
by making adjustments to the weights of the neural network controller based on the difference, e, between the actual plant output,
Yc (feedback signal) and the target output, YD as illustrated in Fig. 8.
Another control application is to use a trained inverse neural
network model which uses actuator set points as inputs such that
the network could predict emissions as an output. This trained
neural network could be used as a controller in a feedforward
structure as illustrated in Fig. 9 [9,97].
<p>
In Fig. 9, the engine is fed with a number of inputs, U, and
generates an output, Yc. The inverse neural network attempts to
establish the reverse non-linear relationship between Yc as input
and the original number of inputs, U. This is achieved by monitoring the error, e, between the outputs of the inverse neural network
model, UM and U, and adjusting the weights of the neural network
until the error between UM and U is minimized. This way, a copy of
the trained inverse neural network model could be used for
feedforward control of the engine.
<p>
In an attempt to minimize the error in the estimation of the
required air–fuel ratio by an engine for stationary and dynamic
operating conditions, Wendeker and Czarnigowski [127] developed a hybrid control system. This involved the use of an adaptive
control system and a trained inverse neural network similar to
the type described in the work reported by Meyer and Greff [97].
In the study reported by Wendeker and Czarnigowski [127] the
performance of the traditional jump-ramp, adaptive and hybrid
control systems were compared, with the results indicating that
using only the adaptive control system reduced the error of
air–fuel ratio estimation relative to the use of the traditional
jump-ramp control system that relied on the lambda sensor input.
The hybrid control system was found to be the best among the
three types of systems as it performed satisfactorily under all
engine operating conditions to stabilize the air–fuel ratio. Fig. 10
shows the layout of the hybrid system used for fuel injection
control.
<p>
3.4. On-Board Diagnostic applications
<p>
Virtual sensing using neural networks, as discussed earlier,
could be used to develop alternative OBD algorithms. For a
spark-ignition engine, estimating the emissions is possible with a
neural network virtual sensing system that does not depend on
the lambda sensor input. This way, emissions could be estimated
in a precise manner, which might not be the case with the use of
a physical lambda sensor over a given period of time because of
the aging effect and response delay characteristics of the sensor.
With this kind of virtual sensing system, it is possible to determine
the beginning of sensor deterioration with age. An advantage of
using virtual sensing is the ease with which the network compares
<p>
Fig. 11. Use of Q statistic for fault detection [94].
<p>
its inputs and produces the desired output without the need for
look-up tables resulting from a cumbersome calibration process.
Modern OBD systems monitor all sensors and emission control
related devices for correct operation. The application of neural networks comes in handy for providing viable alternative diagnostic
algorithms for monitoring OBD system sensors and emission control devices. Using such monitoring systems while the engine is
working facilitates the detection of faulty sensors and emission
control devices as a consequence of age and mileage [97,54]. In a
study conducted by Mcdowell et al. [94], an autoassociative neural
network [81,92,35], with an identity mapping feature, was used for
fault detection on a spark-ignition engine. A semi-physical model
was used to reduce the number of inputs (sensor signals) for the
artiﬁcial neural network which would otherwise require a great
deal of time in building and be computationally complex. The
neural network was trained with fault-free sensor data collected
over the operating range of the engine and the fault detection
capability of the neural network improved by computing the Q
statistic (the difference between the measured and predicted
variables) of the training data. A fault is detected if the output of
the neural network is such that it goes beyond the applied conﬁdence limit. Fig. 11 illustrates fault detection technique using the
Q statistic having a conﬁdence limit of 99%.
<p>
As a continuation of research work carried out by Grimaldi and
Mariani [54] as well as Grimaldi and Mariani [55], an On-Board
Diagnostic fault detection system was developed by Grimaldi
and Mariani [56] that used trained artiﬁcial neural networks to
detect and isolate faults on a spark-ignition engine. Experimental
data regarding throttle position (a), engine speed (N), output
torque (T) and manifold pressure (p) were used in training the
neural networks. Fault detection and the generation of fault codes
was achieved by computing the difference between the neural network calculated values of a, N, T and P and modiﬁed experimental
values. The layout of the neural networks and other system units
for fault detection is shown in Fig. 12.
<p>
In the work reported by Grimaldi and Mariani [56], it was found
that the developed fault detection system worked well ofﬂine and
stated that testing the system online, to make it more robust,
would be the focus of future research. At a later date, Capriglione
et al. [23] investigated the use of neural networks for online fault
detection on automobile engines. Basically, the work done by
Capriglione et al. [23] was similar to the study conducted by
Grimaldi and Mariani [56] with regard to the use of residuals
(difference between measured experimental sensor data and
neural network output) and the application of thresholds for the
detection of faults. Similarly, the major difference between both
investigations lies in the online testing of the fault detection
capability of the system developed by Capriglione et al. [23]. In
the latter study, testing of the fault detection system was more
detailed in the sense that apart from presenting perturbed sensor
data to the neural networks, Capriglione et al. [23] went a step
further to test the fault detection system online by simulating a
short in the sensor circuit by ﬁxing its signal to zero; an open in
the sensor circuit by ﬁxing its signal to the maximum possible;
holding the sensor output constant and at the previous fault-free
value; in addition to simulating a short circuit between two sensors by imposing the output of one sensor on the other. The fault
detection system was able to achieve a 100% success in fault
identiﬁcation and detection, with no deceiving signals about faults.
Yan and co-worker [67] successfully used a feedforward neural
network, based on backpropagation of network errors, for the
detection of the engine diagnostic condition of misﬁre. The neural
network used was trained with experimental data collected for
normal and abnormal (misﬁre) engine operation. It was possible
for the neural network to detect the different failure modes identiﬁed for the study.
<p>
1356
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
Fig. 12. Layout for engine fault detection using neural networks. Adapted from Grimaldi and Mariani [56].
<p>
4. Demerits and challenges of artiﬁcial neural networks
<p>
4.1. Model generalization ability and prediction accuracy
<p>
The ability of a neural network model to match input to output
data outside the training data set is referred to as generalization.
An artiﬁcial neural network will generalize satisfactorily if underand over-ﬁtting could be eliminated. While under-ﬁtting implies
the situation where there is a high degree of statistical bias,
overﬁtting refers to the situation where there is a high level of
statistical variance between the actual output from a neural
network and the target output [83,84,11,103].
<p>
The model error E can be decomposed into the bias and variance
<p>
error components as shown in Eq. (15).
E2 ¼ E2
<p>
þ Ev
<p>
b
<p>
where Eb = Bias error and Ev = variance error.
<p>
ð15Þ
<p>
The bias error component is basically due to the restricted
model’s structural ﬂexibility that results from the inability of the
model to represent a complex system in an exact manner. This
error type will always be present even if the model’s parameters
(weights and biases) were set to their optimal values. On the other
hand, the variance error is due to the number of the model
parameters and increases with an increase in the number of
neurons for a neural network model. This is in line with the parsimony principle, otherwise known as the Occam’s razor which
states that a for different models being considered for system
identiﬁcation, the model with fewer parameters is relatively more
accurate in predicting a target output based on a training data set
[19,63,45,126]. The variance error component can be approximated by Eq. (16), for an inﬁnitely large training data set.
Variance error  r2 n
N
<p>
ð16Þ
<p>
where r2 represents the variance, n the number of parameters with
N representing the number of training data samples. It is worth noting that for a large training data set, the variance error varies almost
directly as the number of model parameters, n.
<p>
The bias error Eb shown in Eq. (15) is negligible for highly ﬂexible models and in such a case the square of the model’s error can
be equal to the variance error Ev. That is
E 
<p>
ﬃﬃﬃ
pﬃﬃﬃﬃ
p
<p>
p
ﬃﬃﬃﬃﬃ
<p>
ð17Þ
<p>
 r
<p>
Ev
<p>
n
N
<p>
The relationship between the model error and the variance
error shown in Eq. (17) underscores the importance of the number
of data samples collected for the training of a model. This shows
how the number of data sets N and the quality as determined by
r affects the magnitude of model error even for real situations
where the bias error component may be present [103].
<p>
The relationship between model, bias and variance errors is
shown in Fig. 13. It is evident from Fig. 13 that increasing the number of model parameters reduces the bias error while increasing
the variance error. On the other hand, a decrease in the number
of model parameters will lead to an increase in the bias error. It follows, therefore, that the conﬂicting nature of the bias and variance
<p>
Fig. 13. Relationship between model, bias and variance errors for an artiﬁcial
neural network.
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
1357
<p>
errors makes it impossible to reduce (improve) one error type
without worsening (increasing) the other. However, a conﬂicting
multi-objective optimization could be carried out such that the
optimum number of parameters (optimal model complexity) is a
compromise between the bias and variance errors (the bias/variance
trade-off). In order to achieve an optimal model complexity, it is
important to perform a bias/variance trade off which could be
achieved by employing explicit and/or implicit model complexity
optimization methods. The explicit method (as explained earlier)
involves the gradual
increase in the model parameters and
observing the performance in each case in terms of model error.
On the other hand, the implicit method of optimization involves
the use of regularization techniques that applied to change the
model complexity without a change in the nominal number of
parameters used.
<p>
According to Wu et al. [130] the process of selecting a particular
type of network architecture in terms of the number of hidden
layers and the number of neuronal nodes in each hidden layer is
highly heuristic. Wu et al. [130] proposed that in order to ensure
generalization of the neural network model for representing the
air-ﬂow rate through the spark-ignition engine under study, the
network architecture should be selected based on the following
guide: network selection starting by considering the simplest
networks; and that it is important to observe the change in the
training error between the actual network outputs and the target
outputs as the number of hidden layers and neurons are increased
(explicit method of model optimization); the fact that the best
neural network should be selected based on the type of architecture that has the smallest network size (Occam’s razor) and predicts with a minimum of error; and ﬁnally check and validate the
model for its generalization ability. Combining an appropriate
training algorithm,
like the Levenberg-Marquardt algorithm
[98,87,123], and Bayesian regularization has the effect of minimizing overﬁtting and improving generalization ability [130,38,82,42].
In a study conducted by Shamekhi and Shamekhi [118], it was
noted that the prediction ability of a neural network was adversely
affected by an increase in the complexity of the system being
modeled and that the prediction error could be minimized if the
complex system was divided into a number of sub-systems.
This way, a neural network could be used for modeling each
sub-system of the complex non-linear model.
<p>
5. Conclusions and outlook
<p>
Artiﬁcial neural networks have gained attention for a spectrum
of applications including spark-ignition engine calibration. This is
because trained artiﬁcial neural networks are able to satisfy a
majority of the modeling requirements for engine calibration.
The modeling requirements include the ability to deal with the
curse of high-input dimensionality; the use of DoE for obtaining
few measurements as practicable, with the aim of reducing engine
calibration time and resource outlays; ﬂexibility that allows model
parameters to be optimized to avoid overﬁtting; and the facilitation of automated online optimization during the engine calibration process that eliminates the need for user intervention. In the
area of spark-ignition engine calibration, these networks have been
applied in the areas of system identiﬁcation for rapid prototyping,
use of neural networks as look-up table surrogates, emerging
control strategies and OBD applications. While multi-layer feedforward networks could be used for system identiﬁcation, single-layer
recurrent neural networks with an increased number of inputs
could be used for the identiﬁcation and characterization of a
dynamic system. The use of recurrent neural networks makes the
execution of the neural network faster and relatively easy to implement. Even though there was a variation in the number of inputs to
<p>
the various neural networks for the various applications, all the
inputs were within the range (5–10 inputs) considered appropriate
for engine calibration tasks. To this end, it is worth mentioning that
the process of selecting a suitably trained neural network, in terms
of architecture, still remains highly heuristic and requires a great
deal of expertise in the choice of a neural network for a particular
application. However, explicit and/or implicit methods could be
employed for the selection of an optimal neural network model
for a particular application. The Gaussian process modeling
holds a promising future for modeling for the purpose of engine
calibration because it also satisﬁes almost all the aforementioned
calibration requirements. However, the decision to use a particular
type of modeling technique for engine calibration depends on the
particular nature of the problem at hand. In the event that it is
difﬁcult to establish a Gaussian Process model because of a large
number of measurements, alternative non-linear modeling methods like artiﬁcial neural networks, relevance vector machines
(RVM) or support vector machines (SVM) could be used. Furthermore, while it is prudent to use a polynomial regression model
for problems with a low degree of complexity, it is important to
use a local linear model for solving problems that require human
intervention for a large number of measured data.
<p>
Acknowledgments
<p>
The authors would like to express their profound gratitude to
the Hubei Key Laboratory of Advanced Technology for Automotive
Components, Wuhan University of Technology, PR China, for providing ﬁnancial support for the study. This work was also supported by the Chinese Scholarship Council (CSC) Grant numbers
2013GXZ993 and 2014GF032. M.K.A. Ali also appreciates ﬁnancial
support from the Egyptian Government.
<p>
References
<p>
[1] T. Ahmad, M.A. Theobald, A Survey of Variable-Valve-Actuation Technology,
<p>
SAE International, 1989.
[2] R.M. Ashby, J. Jeong, S.Y. Rao, G.J. Heydinger, D.A. Guenther, A primer on
building a hardware in the loop simulation and validation for a 6  4 tractor
trailer model, SAE Int. J. Commer. Veh. 7 (2014) 8–18.
<p>
[3] T.W. Asmus, Perspectives on Applications of Variable Valve Timing, SAE
<p>
International, 1991.
<p>
[4] C. Atkinson, G. Mott, Dynamic Model-Based Calibration Optimization: An
<p>
Introduction and Application to Diesel Engines, SAE International, 2005.
<p>
[5] C.M. Atkinson, T.W. Long, E.L. Hanzevack, Virtual Sensing: A Neural NetworkBased Intelligent Performance and Emissions Prediction System for On-Board
Diagnostics and Engine Control, SAE International, 1998.
<p>
[6] O. Axelsson, A generalized conjugate gradient, least square method, Numer.
<p>
Math. 51 (1987) 209–227.
<p>
[7] B. Babic´, Z. Miljkovic´, N. Vukovic´, V. Antic´, Towards implementation and
autonomous navigation of an intelligent automated guided vehicle in
material handling systems, IJST 36 (2012) 25–40.
<p>
[8] D. Bailey, D. Thompson, How to develop neural-network applications, AI
<p>
Expert 5 (1990) 38–47.
<p>
[9] R. Ballini, F.J. Von Zuben, Application of neural networks to adaptive control of
nonlinear systems, in: G.W. Ng (Ed.), Control Systems Centre Series, UMIST,
UK, 1997, ISBN 0-86380-214-1, 2000. Pergamon.
<p>
[10] R. Battiti, First- and second-order methods for learning: between steepest
<p>
descent and Newton’s method, Neural Comput. 4 (1992) 141–166.
<p>
[11] E.B. Baum, D. Haussler, What size net gives valid generalization?, Neural
<p>
Comput 1 (1989) 151–160.
E.A. Wan,
<p>
Beaufays,
<p>
[12] F.
<p>
and
backpropagation-through-time: an application of ﬂow graph interreciprocity, Neural Comput. 6 (1994) 296–306.
<p>
backpropagation
<p>
real-time
<p>
Relating
<p>
[13] G. Bebis, M. Georgiopoulos, Feed-Forward Neural Networks, Potentials, IEEE
<p>
13 (1994) 27–31.
<p>
[14] C. Beltrami, Y. Chamaillard, G. Millerioux, P. Higelin, G. Bloch, AFR control in
SI engine with neural prediction of cylinder air mass, in: Proceedings of the
American Control Conference, 2003, pp. 1404–1409.
<p>
[15] Y. Bengio, P. Simard, P. Frasconi, Learning long-term dependencies with
gradient descent is difﬁcult, IEEE Trans. Neural Networks 5 (1994) 157–166.
[16] B. Berger, F. Rauscher, Evaluation of Gaussian processes for Black-Box engine
modelling, in: Proceedings of the 6th Conference Design of Experiments
(DoE) in Engine Development, 2011.
<p>
1358
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
[17] B. Berger, Modeling and Optimization for Stationary Base Engine Calibration
<p>
(Doctoral dissertation), Universität München, 2012.
<p>
[18] C. Bishop, Improving the generalization properties of radial basis function
<p>
neural networks, Neural Comput. 3 (1991) 579–588.
<p>
[19] A. Blumer, A. Ehrenfeucht, D. Haussler, M.K. Warmuth, Occam’s Razor, Inform.
<p>
Process. Lett. 24 (1987) 377–380.
<p>
[54] C.N. Grimaldi, F. Mariani, On Board Diagnosis of Internal Combustion Engines:
A New Model Deﬁnition and Experimental Validation, SAE International,
1997.
<p>
[55] C.N. Grimaldi, F. Mariani, Prediction of Engine Operational Parameters for On
<p>
Board Diagnostics using a Free Model Technology, SAE International, 1999.
<p>
[56] C.N. Grimaldi, F. Mariani, OBD Engine Fault Detection using a Neural
<p>
[20] S.V. Bohac, D.N. Assanis, Effect of Exhaust Valve Timing on Gasoline Engine
<p>
Approach, SAE International, 2001.
<p>
Performance and Hydrocarbon Emissions, SAE International, 2004.
<p>
[57] M. Guerrier, P. Cawsey, The Development of Model Based Methodologies for
<p>
[21] C. Burges, T. Shaked, E. Renshaw, A. Lazier, M. Deeds, N. Hamilton, G.
Hullender, Learning to rank using gradient descent, in: Proceedings of the
22nd International Conference on Machine Learning, ACM, 2005, pp. 89–96.
I.
<p>
the integrate-and-ﬁre neuron model:
<p>
[22] A.N. Burkitt, A review of
<p>
Homogeneous synaptic input, Biol. Cybern. 95 (2006) 1–19.
<p>
[23] D. Capriglione, C. Liguori, C. Pianese, A. Pietrosanto, On-line sensor fault
detection, isolation, and accommodation in automotive engines, IEEE Trans.
Instrum. Meas. 52 (2003) 1182–1189.
<p>
[24] D.S. Chen, R.C. Jain, A robust backpropagation learning algorithm for function
<p>
approximation, IEEE Trans. Neural Networks 5 (1994) 467–479.
<p>
[25] G. Chen, Z.-L. Ren, H.-Z. Sun, Curve ﬁtting in least-square method and its
<p>
realization with matlab, Ordnance Ind. Automation 3 (2005) 063.
<p>
[26] S. Chen, C.F. Cowan, P.M. Grant, Orthogonal least squares learning algorithm
for radial basis function networks, IEEE Trans. Neural Networks 2 (1991) 302–
309.
<p>
[27] T. Chen, H. Chen, Approximation capability to functions of several variables,
nonlinear functionals, and operators by radial basis function neural networks,
IEEE Trans. Neural Networks 6 (1995) 904–910.
<p>
[28] D. Cho, J. Hedrick, A nonlinear controller design method for fuel-injected
<p>
automotive engines, J. Eng. Gas Turbines Power 110 (1988) 313–320.
<p>
[29] D. Cho, J.K. Hedrick, Sliding mode fuel-injection controller: its advantages,
<p>
J. Dyn. Syst. Meas. Contr. 113 (1991) 537–541.
<p>
Gasoline IC Engine Calibration, SAE International, 2004.
<p>
[58] T. Gutjahr, H. Kleinegraeber, T. Huber, T. Kruse, Advanced Statistical System
Identiﬁcation in Ecu-Development and Optimization, in: SAE Technical Paper,
2015.
<p>
[59] W. Hannibal, R. Flierl, L. Stiegler, R. Meyer, Overview of Current Continuously
Variable Valve Lift Systems for Four-Stroke Spark-Ignition Engines and the
Criteria for their Design Ratings, SAE International, 2004.
<p>
[60] S. Haykin, Neural Networks: A Comprehensive Foundation, Prentice-Hall,
<p>
1999.
<p>
[61] J.C. Helton, F.J. Davis, Latin hypercube sampling and the propagation of
uncertainty in analyses of complex systems, Reliab. Eng. Syst. Saf. 81 (2003)
23–69.
<p>
[62] E. Hendricks, M. Jensen, P. Kaidantzis, P. Rasmussen, T. Vesterholm, Transient
A/F Ratio Errors in Conventional SI Engine Controllers, SAE International,
1993.
<p>
[63] F. Heylighen, Occam’s Razor, Principia Cybernetica Web, 1997.
[64] A. Himmler, K. Lamberg, M. Beine, Hardware-in-the-Loop Testing in the
<p>
Context of ISO 26262, SAE International, 2012.
<p>
[65] H. Hong, G. Parvate-Patil, B. Gordon, Review and analysis of variable valve
timing strategies—eight ways to approach, Proc. Inst. Mech. Eng. Part D:
J. Automobile Eng. 218 (2004) 1179–1200.
<p>
[66] K. Hornik, M. Stinchcombe, H. White, Multilayer feedforward networks are
<p>
[30] D.-I.D. Cho, H.-K. Oh, Variable structure control method for fuel-injected
<p>
universal approximators, Neural Networks 2 (1989) 359–366.
<p>
systems, J. Dyn. Syst. Meas. Contr. 115 (1993) 475–481.
<p>
[31] K. Choi, B.D. Youn, R.-J. Yang, Moving least square method for reliabilityin: 4th World Congress of Structural and
based design optimization,
Multidisciplinary Optimization, Liaoning Electronic Press, PRC, Shenyang,
2001, pp. 4–8.
<p>
[32] P.S. Churchland, T.J. Sejnowski, The Computational Brain, The Mit Press, 1992.
[33] O. De Jeses, M.T. Hagan, Backpropagation through time for a general class of
recurrent network. Neural Networks, 2001, in: Proceedings of the IEEE Joint
Conference on Neural Networks, 2000, pp. 2638–2643.
<p>
[34] H. Demuth, M. Beale, M. Hagan, Neural Network ToolboxTM 6. User’s Guide,
<p>
2008.
<p>
[35] T. Denoeux, M.-H. Masson, Principal component analysis of fuzzy data
using autoassociative neural networks, IEEE Trans. Fuzzy Syst. 12 (2004)
336–349.
<p>
[36] R. Di Gioia, D. Papaleo, F.M. Vicchi, N. Cavina, Virtual GDI Engine as a Tool for
<p>
Model-Based Calibration, SAE International, 2012.
<p>
[37] N. Didcock, S. Jakubek, H.-M. Kögeler, Regularisation methods for neural
<p>
network model averaging, Eng. Appl. Artif. Intell. 41 (2015) 128–138.
<p>
[38] C. Doan, S. Liong, Generalization for multilayer neural network Bayesian
regularization or early stopping, in: Proceedings of Asia Paciﬁc Association of
Hydrology and Water Resources 2nd Conference, 2004, pp. 5–8.
<p>
[39] T. Dresner, P. Barkan, A Review of Variable Valve Timing Beneﬁts and Modes
<p>
of Operation, SAE International, 1989.
<p>
[67] J. Hu, F. Yan, A research on the misﬁre diagnosis ff gasoline engine based on
<p>
BP neural network, Automotive Eng. 33 (2011) 5.
<p>
[68] J. Hu, F. Yan, H. Zhu, J. Yang, A research on the compensation control method
<p>
of oxygen sensor under malfunction status, Automotive Eng. 34 (2012) 6.
<p>
[69] G.-B. Huang, Y.-Q. Chen, H. Babri, Classiﬁcation ability of single hidden layer
feedforward neural networks, IEEE Trans. Neural Networks 11 (2000) 799–
801.
<p>
[70] G.-B. Huang, Q.-Y. Zhu, C.-K. Siew, Extreme learning machine: a new learning
in: Proceedings of the IEEE
<p>
scheme of
International Joint Conference on Neural Networks, 2004, pp. 985–990.
<p>
feedforward neural networks,
<p>
[71] D. Huntington, C. Lyrintzis,
<p>
Improvements to and limitations of Latin
<p>
hypercube sampling, Probab. Eng. Mech. 13 (1998) 245–253.
<p>
[72] A.K.
<p>
Jain,
<p>
J. Mao, K. Mohiuddin, Artiﬁcial neural networks: a tutorial,
<p>
Computer (1996) 31–44.
<p>
[73] A. Jain, S.S. Tikar, S.S. Ramdasi, S.S. Thipse, N.V. Marathe, P. Ekambaram,
Design and Development of Variable Valve Actuation (VVA) Mechanism
Concept for Multi-Cylinder Engine, SAE International, 2015.
<p>
[74] T. Jarratt, C. Eckert, R. Weeks, P. Clarkson, Environmental Legislation as a
Driver of Design, 2003 (Available online at: <http://oro.open.ac.uk/13233/1/
13233.pdf>, accessed 20.05.2015).
<p>
[75] A.K. Jian, J. Mao, K.M. Mohuiddin, Artiﬁcial neural networks: a tutorial,
<p>
Computer 3 (1996) 31–44.
<p>
[76] S. Jiang, D. Nutter, A. Gullitti, Implementation of Model-Based Calibration for
<p>
[40] J. El Hadef, G. Colin, V. Talon, Y. Chamaillard, Neural Model for Real-Time
<p>
a Gasoline Engine, SAE International, 2012.
<p>
Engine Volumetric Efﬁciency Estimation, SAE International, 2013.
<p>
[41] T. Erkkinen, Fixed-Point ECU Development with Model-Based Design, SAE
<p>
International, 2008.
<p>
[42] Z. Filipi, Y. Wang, D. Assanis, Variable geometry turbine (VGT) strategies for
improving diesel engine in-vehicle response: a simulation study, Int. J. Heavy
Veh. Syst. 11 (2004) 303–326.
<p>
[43] R. Flierl, M. Klüting, The Third Generation of Valvetrains – New Fully Variable
<p>
Valvetrains for Throttle-Free Load Control, SAE International, 2000.
<p>
[44] A. Florian, An efﬁcient sampling scheme: updated Latin hypercube sampling,
<p>
Probab. Eng. Mech. 7 (1992) 123–130.
<p>
[45] M.R.
<p>
Forster, Key concepts
<p>
in model
<p>
selection: performance
<p>
and
<p>
generalizability, J. Math. Psychol. 44 (2000) 205–231.
<p>
[46] K.-I. Funahashi, Y. Nakamura, Approximation of dynamical systems by
continuous time recurrent neural networks, Neural Networks 6 (1993)
801–806.
<p>
[48] J. Getzlaff, T. Dost, T. Lambert, E. Lenk, A Fully Variable Hydraulic Valve Train
Concept with Continuous Measuring of the Valve Lift Movement, SAE
International, 2015.
<p>
[49] R.C.S.L.L. Giles, Overﬁtting in neural nets: backpropagation, conjugate
gradient, and early stopping. Advances in Neural Information Processing
Systems 13, in: Proceedings of the 2000 Conference, MIT Press, 2001, p. 402.
[50] O. Giustolisi, A. Doglioni, D. Savic, B. Webb, A multi-model approach to
analysis of environmental phenomena, Environ. Model. Softw. 22 (2007)
674–682.
<p>
[51] G. Goodwin, K. Sin, Adaptive Filtering Prediction and Control, Prentice-Hall,
<p>
1984.
<p>
[52] W. Gottschalk, G. Kirstein, O. Magnor, M. Schultalbers, R. Wetten,
Investigations on a catalyst heating strategy by variable valve train for SI
engines, SAE Int. J. Engines 5 (2012) 1177–1200.
<p>
[53] C. Gray, A Review of Variable Engine Valve Timing, SAE International, 1988.
<p>
[77] D. Jones, J. Watton, K. Brown, Comparison of Black-, White-, and GreyBox Models to predict ultimate tensile strength of high-strength hot rolled
coils at the port Talbot hot strip mill, Proc. Inst. Mech. Eng. Part L: J. Mater.
Des. Appl. 221 (2007) 1–9.
<p>
[78] S. Kamat, V. Diwanji, J. Smith, H. Javaherian, K.P. Madhavan, Virtual Sensing of
<p>
SI Engines using Recurrent Neural Networks, SAE International, 2006.
<p>
[79] B. Karlik, A.V. Olgac, Performance analysis of various activation functions in
generalized MLP architectures of neural networks, Int. J. Artiﬁcial Intell.
Expert Syst. 1 (2011) 111–122.
<p>
[80] M.R. Kianifar, L.F. Campean, D. Richardson, Sequential DoE framework for
steady state model based calibration, SAE Int. J. Engines 6 (2013) 843–855.
[81] M.A. Kramer, Autoassociative neural networks, Comput. Chem. Eng. 16
<p>
(1992) 313–328.
<p>
[82] J. Lampinen, A. Vehtari, Bayesian approach for neural networks—review and
<p>
case studies, Neural Networks 14 (2001) 257–274.
<p>
[83] S. Lawrence, C.L. Giles, Overﬁtting and neural networks: conjugate gradient
and backpropagation. Neural networks, 2000. Ijcnn 2000, in: Proceedings of
the IEEE-INNS-ENNS International Joint Conference On, IEEE, 2000, pp. 114–
119.
<p>
[84] S. Lawrence, C.L. Giles, A. Tsoi, What Size Neural Network gives Optimal
<p>
Generalization? Convergence Properties of Backpropagation, 1998.
<p>
[85] U. Lenz, D. Schroeder, Transient Air-Fuel Ratio Control using Artiﬁcial
<p>
Intelligence, SAE International, 1997.
<p>
[86] Y. Liu, X. Yao, Simultaneous training of negatively correlated neural
networks in an ensemble, IEEE Trans. Syst. Man Cybern. B Cybern. 29
(1999) 716–725.
<p>
[87] M.I. Lourakis, A brief description of the Levenberg-Marquardt algorithm
<p>
implemented by Levmar, Found. Res. Technol. 4 (2005) 1–6.
<p>
[88] T.H. Ma, Effect of Variable Engine Valve Timing on Fuel Economy, SAE
<p>
International, 1988.
<p>
R.F. Turkson et al. / Engineering Science and Technology, an International Journal 19 (2016) 1346–1359
<p>
1359
<p>
[89] S. Magner, M. Jankovic, Delta air-charge anticipation for mass air ﬂow and
in: IEEE Proceedings of the
<p>
electronic throttle control based systems,
American Control Conference, 2002, pp. 1407–1412.
<p>
[90] M. Majors, J. Stori, D. Cho, Neural network control of automotive fuel<p>
injection systems, IEEE Control Syst. Mag. 14 (1994) 5.
<p>
[91] G.W. Malaczynski, M. Mueller, J. Pfeiffer, D. Cabush, K. Hoyer, Replacing
Volumetric Efﬁciency Calibration Look-Up Tables with Artiﬁcial Neural
Network-Based Algorithm for Variable Valve Actuation, SAE International,
2010.
<p>
[92] T. Marwala, S. Chakraverty, Fault classiﬁcation in structures with incomplete
measured data using autoassociative neural networks and genetic algorithm,
Curr. Sci.-Bangalore 90 (2006) 542.
<p>
[93] W.S. Mcculloch, W. Pitts, A logical calculus of the ideas immanent in nervous
<p>
activity, Bull. Math. Biophys. 5 (1943) 115–133.
<p>
[94] N. Mcdowell, G. Mccullough, X. Wang, U. Kruger, G.W. Irwin, Fault Detection
in Internal Combustion Engines using a Semi-Physical Neural Network
Approach, SAE International, 2007.
<p>
[95] M.D. Mckay, R.J. Beckman, W.J. Conover, Comparison of three methods for
selecting values of input variables in the analysis of output from a computer
code, Technometrics 21 (1979) 239–245.
<p>
[96] K. Mehrotra, C.K. Mohan, S. Ranka, Elements of Artiﬁcial Neural Networks,
<p>
MIT Press, 1997.
<p>
[97] S. Meyer, A. Greff, New Calibration Methods and Control Systems with
<p>
Artiﬁcial Neural Networks, SAE International, 2002.
<p>
[113] D.E. Rumelhart, G.E. Hinton, R.J. Williams, Learning Internal Representations
<p>
by Error Propagation, DTIC Document, 1985.
<p>
[114] S.J. Rutherford, D.J. Cole, Modelling nonlinear vehicle dynamics with neural
<p>
networks, Int. J. Veh. Des. 53 (2010) 260–287.
<p>
[115] A. Schlosser, B. Kinoo, W. Salber, S. Werner, N. Ademes, Accelerated
SAE
<p>
through Model
<p>
Powertrain Development
International, 2006.
<p>
Based
<p>
Calibration,
<p>
[116] T.J. Sejnowski, Neural network learning algorithms, Neural Comput. (1989).
<p>
Springer.
<p>
[117] M.A. Shahin, M.B. Jaksa, H.R. Maier, Recent advances and future challenges for
artiﬁcial neural systems in geotechnical engineering applications, Adv. Artif.
Neural Syst. 2009 (2009) 5.
<p>
[118] A.-M. Shamekhi, A.H. Shamekhi, A new approach in improvement of mean
value models for spark ignition engines using neural networks, Expert Syst.
Appl. 42 (2015) 5192–5218.
<p>
[119] K.-W. Shin, S.S. Kim, D.-J. Lim, Automatic Test-Case Generation for Hardwarein-the-Loop Testing of Automotive Body Control Modules, SAE International,
2013.
<p>
[120] M. Shin, R.G. Sargent, A.L. Goel, Optimization and response surfaces: Gaussian
radial basis functions for simulation metamodeling, in: Proceedings of the
34th Conference on Winter Simulation: Exploring New Frontiers. Winter
Simulation Conference, 2002, pp. 483–488.
<p>
[121] D.F. Specht, A general regression neural network,
<p>
IEEE Trans. Neural
<p>
Networks 2 (1991) 568–576.
<p>
[98] J.J. Moré, The Levenberg-Marquardt algorithm: implementation and theory,
<p>
[122] K. Suzuki, Artiﬁcial Neural Networks-Industrial and Control Engineering
<p>
Numer. Anal. (1978). Springer.
<p>
[99] R. Müller, B. Schneider, Approximation and Control of the Engine Torque
<p>
Using Neural Networks, SAE International, 2000.
<p>
[100] M. Nakamura, S. Hara, Y. Yamada, K. Takeda, N. Okamoto, T. Hibi, S.
Takemura, S. Aoyama, A Continuous Variable Valve Event and Lift Control
Device (VEL) for Automotive Engines, SAE International, 2001.
<p>
[101] H. Nareid, M. Grimes, J. Verdejo, A Neural Network Based Methodology for
<p>
Applications, Intech, 2011.
<p>
[123] A. Tahavvor, S. Sepehrinia, Prediction of the temperature of the hole during
the drilling process using artiﬁcial neural networks, IJST 38 (2014) 269–274.
[125] D. Vogel, Trading Up: Consumer and Environmental Regulation in a Global
<p>
Economy, Harvard University Press, 2009.
<p>
[126] D. Walsh, Occam’s razor: a principle of intellectual elegance, Am. Philos. Q.
<p>
(1979) 241–244.
<p>
Virtual Sensor Development, SAE International, 2005.
<p>
[127] M. Wendeker,
<p>
J. Czarnigowski, Hybrid Air/Fuel Ratio Control using the
<p>
[102] K.S. Narendra, K. Parthasarathy, Identiﬁcation and control of dynamical
<p>
Adaptive Estimation and Neural Network, SAE International, 2000.
<p>
systems using neural networks, IEEE Trans. Neural Networks 1 (1990) 23.
<p>
[128] P.J. Werbos, Backpropagation through time: what it does and how to do it,
<p>
[103] O. Nelles, Nonlinear System Identiﬁcation: From Classical Approaches to
Neural Networks and Fuzzy Models, Springer Science & Business Media,
2001.
<p>
[104] B.R. Noack, M. Morzynski, G. Tadmor, Reduced-Order Modelling for Flow
<p>
Control, Springer Science & Business Media, 2011.
<p>
[105] E. Oja, Simpliﬁed neuron model as a principal component analyzer, J. Math.
<p>
Biol. 15 (1982) 267–273.
<p>
[106] I. Papadimitriou, M. Warner, J. Silvestri, J. Lennblad, S. Tabar, Neural Network
Based Fast-Running Engine Models for Control-Oriented Applications, SAE
International, 2005.
<p>
[107] J. Park, I.W. Sandberg, Universal approximation using radial-basis-function
<p>
networks, Neural Comput. 3 (1991) 246–257.
<p>
[108] W.F. Powers, P.R. Nicastri, Automotive vehicle control challenges in the 21st
<p>
century, Control Eng. Pract. 8 (2000) 605–618.
<p>
[109] G.V. Puskorius, L.A. Feldkamp, Neurocontrol of nonlinear dynamical systems
with Kalman ﬁlter trained recurrent networks, IEEE Trans. Neural Networks 5
(1994) 279–297.
<p>
[110] W.B. Ribbens, Understanding Automotive Electronics: An Engineering
<p>
Perspective, Butterworth-Heinemann, 2013.
<p>
[111] M. Riedmiller, Advanced supervised learning in multi-layer perceptrons—
from backpropagation to adaptive learning algorithms, Comput. Stand.
Interfaces 16 (1994) 265–278.
<p>
[112] K. Röpke, Design of Experiments (DoE) in Engine Development: Modern
Development Methods to Meet New Challenges; with 30 Tables, ExpertVerlag, 2009.
<p>
Proc. IEEE 78 (1990) 1550–1560.
<p>
[129] R.J. Williams, D. Zipser, A learning algorithm for continually running fully
<p>
recurrent neural networks, Neural Comput. 1 (1989) 270–280.
<p>
[130] B. Wu, Z. Filipi, D.N. Assanis, D.M. Kramer, G.L. Ohl, M.J. Prucka, E. Divalentin,
Using Artiﬁcial Neural Networks for Representing the Air Flow Rate through a
2.4 L VVT Engine, SAE International, 2004.
<p>
[131] B. Wu, R.G. Prucka, Z. Filipi, D.M. Kramer, G.L. Ohl, Cam-Phasing Optimization
Using Artiﬁcial Neural Networks as Surrogate Models-Maximizing Torque
Output, SAE International, 2005.
<p>
[132] Y. Xia, H. Leung, E. Bossé, Neural data fusion algorithms based on a linearly
constrained least square method, IEEE Trans. Neural Networks 13 (2002)
320–329.
<p>
[133] Y. Yamasaki, F.X. Schauer, G. Wachtmeister, Development of Dynamic Models
for an HCCI Engine with Fully Variable Valve-Train, SAE International, 2013.
[134] Q. Yan, M. Kao, M. Barrera, Algorithm-In-The-Loop with Plant Model
Simulation, Reusable Test Suite in Production Codes Veriﬁcation and
Controller Hardware-in-the-Loop Bench Testing, SAE International, 2010.
<p>
[135] L. Yingwei, N. Sundararajan, P. Saratchandran, A sequential learning scheme
for function approximation using minimal radial basis function neural
networks, Neural Comput. 9 (1997) 461–478.
<p>
[136] W. Yu, X. Li, Some new results on system identiﬁcation with dynamic neural
<p>
networks, IEEE Trans. Neural Networks 12 (2001) 412–417.
<p>
[137] Y.-J. Zhai, D.-L. Yu, Neural network model-based automotive engine air/fuel
ratio control and robustness evaluation, Eng. Appl. Artif. Intell. 22 (2009)
171–180.
<p>
