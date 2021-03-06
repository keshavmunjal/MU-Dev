!function (e) {
    function t(t, a) {
        this.element = t, this.settings = e.extend({}, s, a), this._defaults = s, this._name = n, this.targetDate = null, this.days = null, this.hours = null, this.minutes = null, this.seconds = null, this.milliseconds = null, this.deciseconds = null, this.intervalId = null, this.dim = 864e5, this.him = 36e5, this.iim = 6e4, this.seim = 1e3, this.deim = 100, this.wrapsExists = new Array, this.oldValues = new Array, this.changed = !1, this.init()
    }

    var n = "countEverest", s = {day: 19, month: 1, year: 2038, hour: 3, minute: 14, second: 8, millisecond: 0, daysWrapper: ".ce-days", hoursWrapper: ".ce-hours", minutesWrapper: ".ce-minutes", secondsWrapper: ".ce-seconds", decisecondsWrapper: ".ce-dseconds", millisecondsWrapper: ".ce-mseconds", daysLabelWrapper: ".ce-days-label", hoursLabelWrapper: ".ce-hours-label", minutesLabelWrapper: ".ce-minutes-label", secondsLabelWrapper: ".ce-seconds-label", decisecondsLabelWrapper: ".ce-dseconds-label", millisecondsLabelWrapper: ".ce-mseconds-label", daysLabel: "Days", dayLabel: "Day", hoursLabel: "Hours", hourLabel: "Hour", minutesLabel: "Minutes", minuteLabel: "Minute", secondsLabel: "Seconds", secondLabel: "Second", decisecondsLabel: "Deciseconds", decisecondLabel: "Decisecond", millisecondsLabel: "Milliseconds", millisecondLabel: "Millisecond", timeout: 1e3, highspeedTimeout: 4, leftHandZeros: !0, wrapDigits: !0, onInit: null, beforeCalculation: null, afterCalculation: null, onCalculation: null, onChange: null, onComplete: null};
    t.prototype = {init: function () {
        var t = this, n = t.element, s = t.settings;
        t.setTargetDate(new Date(s.year, s.month - 1, s.day, s.hour, s.minute, s.second)), (e(n).find(s.decisecondsWrapper).length > 0 || e(n).find(s.millisecondsWrapper).length > 0) && (s.timeout = s.highspeedTimeout), e.isFunction(s.onInit) && s.onInit.call(t), t.intervalId = setInterval(function () {
            t.calculate()
        }, t.timeout), t.calculate()
    }, calculate: function () {
        var t = this, n = t.settings, s = t.getCurrentDate(), a = t.getTargetDate(), i = a - s, l = i, r = !1;
        e.isFunction(n.beforeCalculation) && n.beforeCalculation.call(t), t.changed = !1;
        var o = Math.floor(l / t.dim);
        l %= t.dim;
        var c = Math.floor(l / t.him);
        l %= t.him;
        var u = Math.floor(l / t.iim);
        l %= t.iim;
        var d = Math.floor(l / t.seim), m = l % t.seim, h = Math.floor(m / t.deim);
        o = t.naturalNum(o), c = t.naturalNum(c), u = t.naturalNum(u), d = t.naturalNum(d), m = t.naturalNum(m), h = t.naturalNum(h), t.days = o, t.hours = c, t.minutes = u, t.seconds = d, t.milliseconds = m, t.deciseconds = h, t.output(), Math.floor(i / n.timeout) <= 0 && (r = !0, (null != n.millisecondsWrapper || null != n.decisecondsWrapper) && (r = 0 >= i ? !0 : !1)), 1 == r && (e.isFunction(n.onComplete) && n.onComplete.call(t), clearInterval(t.intervalId)), e.isFunction(n.onCalculation) && n.onCalculation.call(t), e.isFunction(n.afterCalculation) && n.afterCalculation.call(t)
    }, output: function () {
        var t = this, n = t.element, s = (e(n), t.settings), a = t.days, i = t.hours, l = t.minutes, r = t.seconds, o = t.deciseconds, c = t.milliseconds, u = s.dayLabel, d = s.hourLabel, m = s.minuteLabel, h = s.secondLabel, p = s.decisecondLabel, b = s.millisecondsLabel, g = 1 == a && null !== u ? u : s.daysLabel, f = 1 == i && null !== d ? d : s.hoursLabel, L = 1 == l && null !== m ? m : s.minutesLabel, w = 1 == r && null !== h ? h : s.secondsLabel, D = 1 == o && null !== p ? p : s.decisecondsLabel, W = 1 == c && null !== b ? b : s.millisecondsLabel;
        t.writeToDom(s.daysLabelWrapper, g), t.writeToDom(s.hoursLabelWrapper, f), t.writeToDom(s.minutesLabelWrapper, L), t.writeToDom(s.secondsLabelWrapper, w), t.writeToDom(s.decisecondsLabelWrapper, D), t.writeToDom(s.millisecondsLabelWrapper, W), 1 == s.leftHandZeros && (i = t.strPad(i, 2), l = t.strPad(l, 2), r = t.strPad(r, 2), c = t.strPad(c, 3)), 1 == s.wrapDigits && (a = t.wrapChars(a, "ce-days-digit"), i = t.wrapChars(i, "ce-hours-digit"), l = t.wrapChars(l, "ce-minutes-digit"), r = t.wrapChars(r, "ce-seconds-digit"), o = t.wrapChars(o, "ce-dseconds-digit"), c = t.wrapChars(c, "ce-mseconds-digit")), t.writeToDom(s.daysWrapper, a), t.writeToDom(s.hoursWrapper, i), t.writeToDom(s.minutesWrapper, l), t.writeToDom(s.secondsWrapper, r), t.writeToDom(s.decisecondsWrapper, o), t.writeToDom(s.millisecondsWrapper, c), e.isFunction(s.onChange) && 1 == t.changed && s.onChange.call(t)
    }, setTargetDate: function (e) {
        this.targetDate = e
    }, getTargetDate: function () {
        return this.targetDate
    }, getCurrentDate: function () {
        return new Date
    }, getOptions: function () {
        return this.settings
    }, naturalNum: function (e) {
        return 0 > e ? 0 : e
    }, strPad: function (e, t, n) {
        var s = e.toString();
        for (n || (n = "0"); s.length < t;)s = n + s;
        return s
    }, wrapChars: function (e, t) {
        var n = "";
        e = e.toString();
        for (var s = 0; s < e.length; s++)n += '<span class="' + t + '">' + e[s] + "</span>";
        return n
    }, writeToDom: function (t, n) {
        var s = this, a = e(s.element);
        s.settings, null == s.wrapsExists[t] && (s.wrapsExists[t] = a.find(t).length > 0 ? !0 : !1), s.oldValues[t] != n && s.wrapsExists[t] && (s.oldValues[t] = n, a.find(t).html(n), s.changed = !0)
    }}, e.fn[n] = function (s) {
        return this.each(function () {
            var a = "plugin_";
            e.data(this, a + n) || e.data(this, a + n, new t(this, s))
        })
    }
}(jQuery, window, document);