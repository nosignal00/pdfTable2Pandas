Robert Engle

159

Figure 1
Nasdaq, Dow Jones and Bond Returns

value of r (that is, the expected value of r based on past information) plus the
standard deviation of r (that is, the square root of the variance) times the error
term for the present period.

The econometric challenge is to specify how the information is used to forecast
the mean and variance of the return, conditional on the past information. While
many speciﬁcations have been considered for the mean return and have been used
in efforts to forecast future returns, virtually no methods were available for the
variance before the introduction of ARCH models. The primary descriptive tool was
the rolling standard deviation. This is the standard deviation calculated using a
ﬁxed number of the most recent observations. For example, this could be calcu-
lated every day using the most recent month (22 business days) of data. It is
convenient to think of this formulation as the ﬁrst ARCH model; it assumes that the
variance of tomorrow’s return is an equally weighted average of the squared
residuals from the last 22 days. The assumption of equal weights seems unattractive,
as one would think that the more recent events would be more relevant and
therefore should have higher weights. Furthermore the assumption of zero weights
for observations more than one month old is also unattractive. The ARCH model
proposed by Engle (1982) let these weights be parameters to be estimated. Thus,
the model allowed the data to determine the best weights to use in forecasting the
variance.

A useful generalization of this model is the GARCH parameterization intro-
duced by Bollerslev (1986). This model is also a weighted average of past squared
residuals, but it has declining weights that never go completely to zero. It gives
parsimonious models that are easy to estimate and, even in its simplest form, has
proven surprisingly successful in predicting conditional variances. The most widely
used GARCH speciﬁcation asserts that the best predictor of the variance in the next
period is a weighted average of the long-run average variance, the variance

