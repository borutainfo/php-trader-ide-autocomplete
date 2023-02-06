<?php
/**
 * @noinspection UnknownInspectionInspection
 * @noinspection DuplicatedCode
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnusedParameterInspection
 * @noinspection PhpUnused
 */

const EXCEPTION_MESSAGE = 'You should not autoload or include file `autcomplete.php`! This file exists only for IDE auto complete function.';


const TRADER_MA_TYPE_SMA = 0;
const TRADER_MA_TYPE_EMA = 1;
const TRADER_MA_TYPE_WMA = 2;
const TRADER_MA_TYPE_DEMA = 3;
const TRADER_MA_TYPE_TEMA = 4;
const TRADER_MA_TYPE_TRIMA = 5;
const TRADER_MA_TYPE_KAMA = 6;
const TRADER_MA_TYPE_MAMA = 7;
const TRADER_MA_TYPE_T3 = 8;
const TRADER_REAL_MIN = -3.0000000000000002E+37;
const TRADER_REAL_MAX = 3.0000000000000002E+37;
const TRADER_FUNC_UNST_ADX = 0;
const TRADER_FUNC_UNST_ADXR = 1;
const TRADER_FUNC_UNST_ATR = 2;
const TRADER_FUNC_UNST_CMO = 3;
const TRADER_FUNC_UNST_DX = 4;
const TRADER_FUNC_UNST_EMA = 5;
const TRADER_FUNC_UNST_HT_DCPERIOD = 6;
const TRADER_FUNC_UNST_HT_DCPHASE = 7;
const TRADER_FUNC_UNST_HT_PHASOR = 8;
const TRADER_FUNC_UNST_HT_TRENDLINE = 10;
const TRADER_FUNC_UNST_HT_TRENDMODE = 11;
const TRADER_FUNC_UNST_KAMA = 12;
const TRADER_FUNC_UNST_MAMA = 13;
const TRADER_FUNC_UNST_MFI = 14;
const TRADER_FUNC_UNST_MINUS_DI = 15;
const TRADER_FUNC_UNST_MINUS_DM = 16;
const TRADER_FUNC_UNST_NATR = 17;
const TRADER_FUNC_UNST_PLUS_DI = 18;
const TRADER_FUNC_UNST_PLUS_DM = 19;
const TRADER_FUNC_UNST_RSI = 20;
const TRADER_FUNC_UNST_STOCHRSI = 21;
const TRADER_FUNC_UNST_T3 = 22;
const TRADER_FUNC_UNST_ALL = 23;
const TRADER_FUNC_UNST_NONE = -1;
const TRADER_COMPATIBILITY_DEFAULT = 0;
const TRADER_COMPATIBILITY_METASTOCK = 1;
const TRADER_ERR_SUCCESS = 0;
const TRADER_ERR_LIB_NOT_INITIALIZE = 1;
const TRADER_ERR_BAD_PARAM = 2;
const TRADER_ERR_ALLOC_ERR = 3;
const TRADER_ERR_GROUP_NOT_FOUND = 4;
const TRADER_ERR_FUNC_NOT_FOUND = 5;
const TRADER_ERR_INVALID_HANDLE = 6;
const TRADER_ERR_INVALID_PARAM_HOLDER = 7;
const TRADER_ERR_INVALID_PARAM_HOLDER_TYPE = 8;
const TRADER_ERR_INVALID_PARAM_FUNCTION = 9;
const TRADER_ERR_INPUT_NOT_ALL_INITIALIZE = 10;
const TRADER_ERR_OUTPUT_NOT_ALL_INITIALIZE = 11;
const TRADER_ERR_OUT_OF_RANGE_START_INDEX = 12;
const TRADER_ERR_OUT_OF_RANGE_END_INDEX = 13;
const TRADER_ERR_INVALID_LIST_TYPE = 14;
const TRADER_ERR_BAD_OBJECT = 15;
const TRADER_ERR_NOT_SUPPORTED = 16;
const TRADER_ERR_INTERNAL_ERROR = 5000;
const TRADER_ERR_UNKNOWN_ERROR = 65535;

/**
 * Calculates the arc cosine for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_acos(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Chaikin A/D Line
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param array $volume Volume traded, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ad(array $high, array $low, array $close, array $volume): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Calculates the vector addition of real0 to real1 and returns the resulting vector.
 *
 * @param array $real0 Array of real values.
 * @param array $real1 Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_add(array $real0, array $real1): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Chaikin A/D Oscillator
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param array $volume Volume traded, array of real values.
 * @param int $fastPeriod [OPTIONAL] [DEFAULT 3] Number of period for the fast MA. Valid range from 2 to 100000.
 * @param int $slowPeriod [OPTIONAL] [DEFAULT 10] Number of period for the slow MA. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_adosc(
    array $high,
    array $low,
    array $close,
    array $volume,
    int $fastPeriod = 3,
    int $slowPeriod = 10
): array {
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Average Directional Movement Index
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_adx(array $high, array $low, array $close, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Average Directional Movement Index Rating
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_adxr(array $high, array $low, array $close, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Absolute Price Oscillator
 *
 * @param array $real Array of real values.
 * @param int $fastPeriod [OPTIONAL] [DEFAULT 12] Number of period for the fast MA. Valid range from 2 to 100000.
 * @param int $slowPeriod [OPTIONAL] [DEFAULT 26] Number of period for the slow MA. Valid range from 2 to 100000.
 * @param int $mAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_apo(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $mAType = TRADER_MA_TYPE_SMA): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Aroon
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_aroon(array $high, array $low, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Aroon Oscillator
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_aroonosc(array $high, array $low, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Trigonometric ASin
 * Calculates the arc sine for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_asin(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Trigonometric ATan
 * Calculates the arc tangent for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_atan(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Average True Range
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_atr(array $high, array $low, array $close, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Average Price
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_avgprice(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Bollinger Bands
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 5] Number of period. Valid range from 2 to 100000.
 * @param float $nbDevUp [OPTIONAL] [DEFAULT 2.0] Deviation multiplier for upper band. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
 * @param float $nbDevDn [OPTIONAL] [DEFAULT 2.0] Deviation multiplier for lower band. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
 * @param int $mAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_bbands(
    array $real,
    int $timePeriod = 5,
    float $nbDevUp = 2.0,
    float $nbDevDn = 2.0,
    int $mAType = TRADER_MA_TYPE_SMA
): array {
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Beta
 *
 * @param array $real0 Array of real values.
 * @param array $real1 Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 5] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_beta(array $real0, array $real1, int $timePeriod = 5): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Balance Of Power
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_bop(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Commodity Channel Index
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cci(array $high, array $low, array $close, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Two Crows
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdl2crows(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Three Black Crows
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdl3blackcrows(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Three Inside Up/Down
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdl3inside(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Three-Line Strike
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdl3linestrike(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Three Outside Up/Down
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdl3outside(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Three Stars In The South
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdl3starsinsouth(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Three Advancing White Soldiers
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdl3whitesoldiers(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Abandoned Baby
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlabandonedbaby(array $open, array $high, array $low, array $close, float $penetration = 0.3): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Advance Block
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdladvanceblock(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Belt-hold
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlbelthold(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Breakaway
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlbreakaway(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Closing Marubozu
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlclosingmarubozu(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Concealing Baby Swallow
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlconcealbabyswall(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Counterattack
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlcounterattack(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Dark Cloud Cover
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param float $penetration [OPTIONAL] [DEFAULT 0.5] Percentage of penetration of a candle within another candle.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdldarkcloudcover(array $open, array $high, array $low, array $close, float $penetration = 0.5): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Doji
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdldoji(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Doji Star
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdldojistar(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Dragonfly Doji
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdldragonflydoji(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Engulfing Pattern
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlengulfing(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Evening Doji Star
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdleveningdojistar(array $open, array $high, array $low, array $close, float $penetration = 0.3): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Evening Star
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdleveningstar(array $open, array $high, array $low, array $close, float $penetration = 0.3): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Up/Down-gap side-by-side white lines
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlgapsidesidewhite(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Gravestone Doji
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlgravestonedoji(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Hammer
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlhammer(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Hanging Man
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlhangingman(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Harami Pattern
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlharami(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Harami Cross Pattern
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlharamicross(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * High-Wave Candle
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlhighwave(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Hikkake Pattern
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlhikkake(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Modified Hikkake Pattern
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlhikkakemod(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Homing Pigeon
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlhomingpigeon(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Identical Three Crows
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlidentical3crows(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * In-Neck Pattern
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlinneck(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Inverted Hammer
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlinvertedhammer(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Kicking
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlkicking(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Kicking - bull/bear determined by the longer marubozu
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlkickingbylength(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Ladder Bottom
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlladderbottom(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Long Legged Doji
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdllongleggeddoji(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Long Line Candle
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdllongline(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Marubozu
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlmarubozu(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Matching Low
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlmatchinglow(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Mat Hold
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param float $penetration [OPTIONAL] [DEFAULT 0.5] Percentage of penetration of a candle within another candle.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlmathold(array $open, array $high, array $low, array $close, float $penetration = 0.5): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Morning Doji Star
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlmorningdojistar(array $open, array $high, array $low, array $close, float $penetration = 0.3): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Morning Star
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlmorningstar(array $open, array $high, array $low, array $close, float $penetration = 0.3): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * On-Neck Pattern
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlonneck(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Piercing Pattern
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlpiercing(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Rickshaw Man
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlrickshawman(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Rising/Falling Three Methods
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlrisefall3methods(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Separating Lines
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlseparatinglines(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Shooting Star
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlshootingstar(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Short Line Candle
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlshortline(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Spinning Top
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlspinningtop(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Stalled Pattern
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlstalledpattern(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Stick Sandwich
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlsticksandwich(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Takuri (Dragonfly Doji with very long lower shadow)
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdltakuri(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Tasuki Gap
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdltasukigap(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Thrusting Pattern
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlthrusting(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Tristar Pattern
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdltristar(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Unique 3 River
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlunique3river(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Upside Gap Two Crows
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlupsidegap2crows(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Upside/Downside Gap Three Methods
 *
 * @param array $open Opening price, array of real values.
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cdlxsidegap3methods(array $open, array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Ceil
 * Calculates the next highest integer for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ceil(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Chande Momentum Oscillator
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cmo(array $real, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Pearson's Correlation Coefficient (r)
 *
 * @param array $real0 Array of real values.
 * @param array $real1 Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_correl(array $real0, array $real1, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Trigonometric Cos
 * Calculates the cosine for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cos(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Trigonometric Cosh
 * Calculates the hyperbolic cosine for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_cosh(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Double Exponential Moving Average
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 3] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_dema(array $real, int $timePeriod = 3): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Arithmetic Div
 * Divides each value from real0 by the corresponding value from real1 and returns the resulting array.
 *
 * @param array $real0 Array of real values.
 * @param array $real1 Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_div(array $real0, array $real1): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Directional Movement Index
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array  Returns an array with calculated data or false on failure.
 */
function trader_dx(array $high, array $low, array $close, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Exponential Moving Average
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ema(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Get error code
 * Get error code of the last operation.
 *
 * @return int Returns the error code identified by one of the TRADER_ERR_* constants.
 */
function trader_errno(): int
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Arithmetic Exp
 * Calculates e raised to the power of each value in real. Returns an array with the calculated data.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_exp(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Floor
 * Calculates the next lowest integer for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_floor(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Get compatibility mode
 * Get compatibility mode which affects the way calculations are done by all the extension functions.
 *
 * @return int Returns the compatibility mode id which can be identified by TRADER_COMPATIBILITY_* series of constants.
 */
function trader_get_compat(): int
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Get unstable period
 * Get unstable period factor for a particular function.
 *
 * @param int $functionId Function ID the factor to be read for. TRADER_FUNC_UNST_* series of constants should be used.
 *
 * @return int Returns the unstable period factor for the corresponding function.
 */
function trader_get_unstable_period(int $functionId): int
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Hilbert Transform - Dominant Cycle Period
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ht_dcperiod(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Hilbert Transform - Dominant Cycle Phase
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ht_dcphase(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Hilbert Transform - Phasor Components
 *
 * @param array $real Array of real values.
 * @param array $inPhase Empty array, will be filled with in phase data.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ht_phasor(array $real, array &$inPhase): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Hilbert Transform - SineWave
 *
 * @param array $real Array of real values.
 * @param array $sine Empty array, will be filled with sine data.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ht_sine(array $real, array &$sine): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Hilbert Transform - Instantaneous Trendline
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ht_trendline(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Hilbert Transform - Trend vs Cycle Mode
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ht_trendmode(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Kaufman Adaptive Moving Average
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_kama(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Linear Regression Angle
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_linearreg_angle(array $real, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Linear Regression Angle
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_linearreg_intercept(array $real, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Linear Regression Slope
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_linearreg_slope(array $real, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Linear Regression
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_linearreg(array $real, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Log Natural
 * Calculates the natural logarithm for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ln(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Log10
 * Calculates the base-10 logarithm for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_log10(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Moving average
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 * @param int $mAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ma(array $real, int $timePeriod = 30, int $mAType = TRADER_MA_TYPE_SMA): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Moving Average Convergence/Divergence
 *
 * @param array $real Array of real values.
 * @param int $fastPeriod [OPTIONAL] [DEFAULT 12] Number of period for the fast MA. Valid range from 2 to 100000.
 * @param int $slowPeriod [OPTIONAL] [DEFAULT 26] Number of period for the slow MA. Valid range from 2 to 100000.
 * @param int $signalPeriod [OPTIONAL] [DEFAULT 9] Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_macd(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $signalPeriod = 9): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Moving Average Convergence/Divergence with controllable Moving Average type
 *
 * @param array $real Array of real values.
 * @param int $fastPeriod [OPTIONAL] [DEFAULT 12] Number of period for the fast MA. Valid range from 2 to 100000.
 * @param int $fastMAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for fast MA. TRADER_MA_TYPE_* series of constants should be used.
 * @param int $slowPeriod [OPTIONAL] [DEFAULT 26] Number of period for the slow MA. Valid range from 2 to 100000.
 * @param int $slowMAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for fast MA. TRADER_MA_TYPE_* series of constants should be used.
 * @param int $signalPeriod [OPTIONAL] [DEFAULT 9] Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_macdext(
    array $real,
    int $fastPeriod = 12,
    int $fastMAType = TRADER_MA_TYPE_SMA,
    int $slowPeriod = 26,
    int $slowMAType = TRADER_MA_TYPE_SMA,
    int $signalPeriod = 9
): array {
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Moving Average Convergence/Divergence Fix 12/26
 *
 * @param array $real Array of real values.
 * @param int $signalPeriod [OPTIONAL] [DEFAULT 9] Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_macdfix(array $real, int $signalPeriod = 9): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * MESA Adaptive Moving Average
 *
 * @param array $real Array of real values.
 * @param float $fastLimit [OPTIONAL] [DEFAULT 0.5] Upper limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
 * @param float $slowLimit [OPTIONAL] [DEFAULT 0.05] Lower limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_mama(array $real, float $fastLimit = 0.5, float $slowLimit = 0.05): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Moving average with variable period
 *
 * @param array $real Array of real values.
 * @param array $periods Array of real values.
 * @param int $minPeriod [OPTIONAL] [DEFAULT 2] Value less than minimum will be changed to Minimum period. Valid range from 2 to 100000
 * @param int $maxPeriod [OPTIONAL] [DEFAULT 30] Value higher than maximum will be changed to Maximum period. Valid range from 2 to 100000
 * @param int $mAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_mavp(
    array $real,
    array $periods,
    int $minPeriod = 2,
    int $maxPeriod = 30,
    int $mAType = TRADER_MA_TYPE_SMA
): array {
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Highest value over a specified period
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_max(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Index of the highest value over a specified period
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_maxindex(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Median Price
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_medprice(array $high, array $low): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Money Flow Index
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param array $volume Volume traded, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_mfi(array $high, array $low, array $close, array $volume, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * MidPoint over period
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_midpoint(array $real, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Midpoint Price over period
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_midprice(array $high, array $low, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Lowest value over a specified period
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_min(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Index of the lowest value over a specified period
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_minindex(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Lowest and highest values over a specified period
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_minmax(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Indexes of lowest and highest values over a specified period
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_minmaxindex(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Minus Directional Indicator
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_minus_di(array $high, array $low, array $close, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Minus Directional Movement
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_minus_dm(array $high, array $low, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Momentum
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 10] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_mom(array $real, int $timePeriod = 10): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Arithmetic Mult
 * Calculates the vector dot product of real0 with real1 and returns the resulting vector.
 *
 * @param array $real0 Array of real values.
 * @param array $real1 Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_mult(array $real0, array $real1): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Normalized Average True Range
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_natr(array $high, array $low, array $close, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * On Balance Volume
 *
 * @param array $real Array of real values.
 * @param array $volume Volume traded, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_obv(array $real, array $volume): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Plus Directional Indicator
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_plus_di(array $high, array $low, array $close, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Plus Directional Movement
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_plus_dm(array $high, array $low, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Percentage Price Oscillator
 *
 * @param array $real Array of real values.
 * @param int $fastPeriod [OPTIONAL] [DEFAULT 12] Number of period for the fast MA. Valid range from 2 to 100000.
 * @param int $slowPeriod [OPTIONAL] [DEFAULT 26] Number of period for the slow MA. Valid range from 2 to 100000.
 * @param int $mAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ppo(array $real, int $fastPeriod = 12, int $slowPeriod = 16, int $mAType = TRADER_MA_TYPE_SMA): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Rate of change : ((price/prevPrice)-1)*100
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 10] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_roc(array $real, int $timePeriod = 10): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Rate of change Percentage: (price-prevPrice)/prevPrice
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 10] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_rocp(array $real, int $timePeriod = 10): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Rate of change ratio 100 scale: (price/prevPrice)*100
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 10] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_rocr100(array $real, int $timePeriod = 10): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Rate of change ratio: (price/prevPrice)
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 10] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_rocr(array $real, int $timePeriod = 10): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Relative Strength Index
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_rsi(array $real, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Parabolic SAR
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param float $acceleration [OPTIONAL] [DEFAULT 0.02] Acceleration Factor used up to the Maximum value. Valid range from 0 to TRADER_REAL_MAX.
 * @param float $maximum [OPTIONAL] [DEFAULT 0.2] Acceleration Factor Maximum value. Valid range from 0 to TRADER_REAL_MAX.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_sar(array $high, array $low, float $acceleration = 0.02, float $maximum = 0.2): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Parabolic SAR - Extended
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param float $startValue [OPTIONAL] [DEFAULT 0.0] Start value and direction. 0 for Auto, >0 for Long, <0 for Short. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
 * @param float $offsetOnReverse [OPTIONAL] [DEFAULT 0.0] Percent offset added/removed to initial stop on short/long reversal. Valid range from 0 to TRADER_REAL_MAX.
 * @param float $accelerationInitLong [OPTIONAL] [DEFAULT 0.02] Acceleration Factor initial value for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
 * @param float $accelerationLong [OPTIONAL] [DEFAULT 0.02] Acceleration Factor for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
 * @param float $accelerationMaxLong [OPTIONAL] [DEFAULT 0.2] Acceleration Factor maximum value for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
 * @param float $accelerationInitShort [OPTIONAL] [DEFAULT 0.02] Acceleration Factor initial value for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
 * @param float $accelerationShort [OPTIONAL] [DEFAULT 0.02] Acceleration Factor for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
 * @param float $accelerationMaxShort [OPTIONAL] [DEFAULT 0.2] Acceleration Factor maximum value for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_sarext(
    array $high,
    array $low,
    float $startValue = 0.0,
    float $offsetOnReverse = 0.0,
    float $accelerationInitLong = 0.02,
    float $accelerationLong = 0.02,
    float $accelerationMaxLong = 0.2,
    float $accelerationInitShort = 0.02,
    float $accelerationShort = 0.02,
    float $accelerationMaxShort = 0.2
): array {
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Set compatibility mode
 * Set compatibility mode which will affect the way calculations are done by all the extension functions.
 *
 * @param int $compatId Compatibility ID. TRADER_COMPATIBILITY_* series of constants should be used.
 */
function trader_set_compat(int $compatId)
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Set unstable period
 * Influences unstable period factor for functions, which are sensible to it. More information about unstable periods can be found on the » TA-Lib API documentation page.
 *
 * @param int $functionId Function ID the factor should be set for. TRADER_FUNC_UNST_* constant series can be used to affect the corresponding function.
 * @param int $timePeriod Unstable period value.
 */
function trader_set_unstable_period(int $functionId, int $timePeriod)
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Trigonometric Sin
 * Calculates the sine for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_sin(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Trigonometric Sinh
 * Calculates the hyperbolic sine for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_sinh(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Simple Moving Average
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_sma(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Square Root
 * Calculates the square root of each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_sqrt(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Standard Deviation
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 5] Number of period. Valid range from 2 to 100000.
 * @param float $nbDev [OPTIONAL] [DEFAULT 1.0] Number of deviations
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_stddev(array $real, int $timePeriod = 5, float $nbDev = 1.0): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Stochastic
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Time period for building the Fast-K line. Valid range from 1 to 100000.
 * @param int $fastK_Period [OPTIONAL] [DEFAULT 5] Time period for building the Fast-K line. Valid range from 1 to 100000.
 * @param int $slowK_Period [OPTIONAL] [DEFAULT 3] Smoothing for making the Slow-K line. Valid range from 1 to 100000, usually set to 3.
 * @param int $slowK_MAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for Slow-K. TRADER_MA_TYPE_* series of constants should be used.
 * @param int $slowD_Period [OPTIONAL] [DEFAULT 3] Smoothing for making the Slow-D line. Valid range from 1 to 100000.
 * @param int $slowD_MAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for Slow-D. TRADER_MA_TYPE_* series of constants should be used.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_stoch(
    array $high,
    array $low,
    array $close,
    int $fastK_Period = 5,
    int $slowK_Period = 3,
    int $slowK_MAType = TRADER_MA_TYPE_SMA,
    int $slowD_Period = 3,
    int $slowD_MAType = TRADER_MA_TYPE_SMA
): array {
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Stochastic Fast
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Time period for building the Fast-K line. Valid range from 1 to 100000.
 * @param int $fastK_Period [OPTIONAL] [DEFAULT 5] Time period for building the Fast-K line. Valid range from 1 to 100000.
 * @param int $fastD_Period [OPTIONAL] [DEFAULT 3] Smoothing for making the Fast-D line. Valid range from 1 to 100000, usually set to 3.
 * @param int $fastD_MAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for Fast-D. TRADER_MA_TYPE_* series of constants should be used.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_stochf(
    array $high,
    array $low,
    array $close,
    int $fastK_Period = 5,
    int $fastD_Period = 3,
    int $fastD_MAType = TRADER_MA_TYPE_SMA
): array {
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Stochastic Relative Strength Index
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 * @param int $fastK_Period [OPTIONAL] [DEFAULT 5] Time period for building the Fast-K line. Valid range from 1 to 100000.
 * @param int $fastD_Period [OPTIONAL] [DEFAULT 3] Smoothing for making the Fast-D line. Valid range from 1 to 100000, usually set to 3.
 * @param int $fastD_MAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for Fast-D. TRADER_MA_TYPE_* series of constants should be used.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_stochrsi(
    array $real,
    int $timePeriod = 14,
    int $fastK_Period = 5,
    int $fastD_Period = 3,
    int $fastD_MAType = TRADER_MA_TYPE_SMA
): array {
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Arithmetic Subtraction
 * Calculates the vector subtraction of real1 from real0 and returns the resulting vector.
 *
 * @param array $real0 Array of real values.
 * @param array $real1 Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_sub(array $real0, array $real1): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Summation
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_sum(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Triple Exponential Moving Average (T3)
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 5] Number of period. Valid range from 2 to 100000.
 * @param float $vFactor [OPTIONAL] [DEFAULT 0.7] Volume Factor. Valid range from 1 to 0.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_t3(array $real, int $timePeriod = 5, float $vFactor = 0.7): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Trigonometric Tan
 * Calculates the tangent for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_tan(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Vector Trigonometric Tanh
 * Calculates the hyperbolic tangent for each value in real and returns the resulting array.
 *
 * @param array $real Array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_tanh(array $real): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Triple Exponential Moving Average
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_tema(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * True Range
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_trange(array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Triangular Moving Average
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_trima(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * 1-day Rate-Of-Change (ROC) of a Triple Smooth EMA
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_trix(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Time Series Forecast
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_tsf(array $real, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Typical Price
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_typprice(array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Ultimate Oscillator
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param int $timePeriod1 [OPTIONAL] [DEFAULT 7] Number of bars for 1st period. Valid range from 1 to 100000.
 * @param int $timePeriod2 [OPTIONAL] [DEFAULT 14] Number of bars for 2nd period. Valid range from 1 to 100000.
 * @param int $timePeriod3 [OPTIONAL] [DEFAULT 28] Number of bars for 3rd period. Valid range from 1 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_ultosc(
    array $high,
    array $low,
    array $close,
    int $timePeriod1 = 7,
    int $timePeriod2 = 14,
    int $timePeriod3 = 28
): array {
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Variance
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 5] Number of period. Valid range from 2 to 100000.
 * @param float $nbDev [OPTIONAL] [DEFAULT 1.0] Number of deviations
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_var(array $real, int $timePeriod = 5, float $nbDev = 1.0): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Weighted Close Price
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_wclprice(array $high, array $low, array $close): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Williams' %R
 *
 * @param array $high High price, array of real values.
 * @param array $low Low price, array of real values.
 * @param array $close Closing price, array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_willr(array $high, array $low, array $close, int $timePeriod = 14): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}

/**
 * Weighted Moving Average
 *
 * @param array $real Array of real values.
 * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
 *
 * @return array Returns an array with calculated data or false on failure.
 */
function trader_wma(array $real, int $timePeriod = 30): array
{
    throw new RuntimeException(EXCEPTION_MESSAGE);
}
