(() => {
    var e = {
            27: (e, t, o) => {
                "use strict";
                o.r(t), o.d(t, { default: () => a });
                var r = o(645),
                    n = o.n(r)()(function (e) {
                        return e[1];
                    });
                n.push([
                    e.id,
                    "#uploader{padding:1em;position:relative}#uploader #uploaderCont #dragandrophandler{flex-direction:column;background:#ebebeb;height:30vh;min-height:180px;border:1px solid #c8c8c8;display:flex;align-items:center;justify-content:center;transition:all 400ms}#uploader #uploaderCont #dragandrophandler>*{transition:all 400ms}#uploader #uploaderCont #dragandrophandler svg{width:100px;height:3.3em;opacity:0.12;margin-bottom:7px}#uploader #uploaderCont #dragandrophandler label{margin-left:5px;color:#007bff;cursor:pointer}#uploader #uploaderCont #dragandrophandler label:hover{text-decoration:underline}#uploader #uploaderCont #dragandrophandler.active{box-shadow:0 0 18px 2px inset #979797;background:#bbd3ff}#uploader #uploaderCont #dragandrophandler.active svg{transform:translateY(11px);height:3.8em;opacity:1;fill:#fff}#uploader #uploaderCont #dragandrophandler.active span{opacity:0}#uploader #uploaderCont .row.fileQueue{padding:1% 0;border-bottom:thin solid #e6e6e6;opacity:0}#uploader #uploaderCont .row.fileQueue>div{display:flex;align-items:center}#uploader #uploaderCont .row.fileQueue>div.name b{overflow:hidden;text-overflow:ellipsis}#uploader #uploaderCont .row.fileQueue>div.remove{justify-content:flex-end}#uploader #uploaderCont .row.queueSrc{display:none}#uploader #uploaderCont .row.ulProgress{display:none;height:16px;width:100%}#uploader #uploaderCont .row.ulProgress .col{position:absolute;top:28%;left:0}#uploader #uploaderCont .row.ulProgress .progress-bar{width:0}#uploader #uploaderCont .submit{display:none;margin-top:17px}\n",
                    "",
                ]);
                const a = n;
               
            },
            645: (e) => {
                "use strict";
                e.exports = function (e) {
                    var t = [];
                    return (
                        (t.toString = function () {
                            return this.map(function (t) {
                                var o = e(t);
                                return t[2] ? "@media ".concat(t[2], " {").concat(o, "}") : o;
                            }).join("");
                        }),
                        (t.i = function (e, o, r) {
                            "string" == typeof e && (e = [[null, e, ""]]);
                            var n = {};
                            if (r)
                                for (var a = 0; a < this.length; a++) {
                                    var i = this[a][0];
                                    null != i && (n[i] = !0);
                                }
                            for (var l = 0; l < e.length; l++) {
                                var s = [].concat(e[l]);
                                (r && n[s[0]]) || (o && (s[2] ? (s[2] = "".concat(o, " and ").concat(s[2])) : (s[2] = o)), t.push(s));
                            }
                        }),
                        t
                    );
                };
            },
            425: (e, t, o) => {
                o(55),
                    (e.exports = function (e) {
                        return (
                            "" +
                            '<div class="modal fade" tabindex="-1" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header">\x3c!--h5.modal-title File Error--\x3e<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Close</button></div></div></div></div>'
                        );
                    });
            },
            152: (e, t, o) => {
                var r = o(55);
                e.exports = function (e) {
                    var t,
                        o = "",
                        n = e || {};
                    return (
                        function (e, n) {
                            (o +=
                                '<div class="container-fluid" id="uploaderCont"><div class="row ddHandler"><div class="col-12" id="dragandrophandler"><svg class="bi bi-upload" width="1em" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8zM5 4.854a.5.5 0 00.707 0L8 2.56l2.293 2.293A.5.5 0 1011 4.146L8.354 1.5a.5.5 0 00-.708 0L5 4.146a.5.5 0 000 .708z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M8 2a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 2z" clip-rule="evenodd"></path></svg><span>Drag files here or<label>browse for files<input value="browse" name="files[]" type="file" style="display: none;" multiple></label></span></div></div>\x3c!--.row.fileQueue--\x3e<div class="row queueSrc"><div class="col name"><b></b></div>'),
                                n && (o += '<div class="col desc"><input class="form-control form-control-sm" name="product_name" type="text" placeholder="Название бренда" maxlength="100"></div>'),
                                e &&
                                    ((o += '<div class="col options"><select class="custom-select custom-select-sm"><option selected>Select this file type</option>'),
                                    function () {
                                        var n = e;
                                        if ("number" == typeof n.length)
                                            for (var a = 0, i = n.length; a < i; a++) {
                                                var l = n[a];
                                                o = o + "<option" + r.attr("value", a, !0, !0) + ">" + r.escape(null == (t = l) ? "" : t) + "</option>";
                                            }
                                        else for (var a in ((i = 0), n)) i++, (l = n[a]), (o = o + "<option" + r.attr("value", a, !0, !0) + ">" + r.escape(null == (t = l) ? "" : t) + "</option>");
                                    }.call(this),
                                    (o += "</select></div>")),
                                (o +=
                                    '<div class="col-2 remove"><input class="btn btn-sm btn-outline-danger" type="button" value="Remove" data-name></div></div><div class="row ulProgress">\x3c!--.col.d-none--\x3e<div class="col">Uploading...<div class="progress"><div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100">0%</div></div></div></div><div class="row submit"><div class="col-12 text-right"><input class="btn btn-primary" type="button" value="Upload"></div></div></div>');
                        }.call(this, "options" in n ? n.options : "undefined" != typeof options ? options : void 0, "showDesc" in n ? n.showDesc : "undefined" != typeof showDesc ? showDesc : void 0),
                        o
                    );
                };
            },
            55: (e, t, o) => {
                "use strict";
                var r = Object.prototype.hasOwnProperty;
                function n(e, t) {
                    return Array.isArray(e)
                        ? (function (e, t) {
                              for (var o, r = "", a = "", i = Array.isArray(t), l = 0; l < e.length; l++) (o = n(e[l])) && (i && t[l] && (o = s(o)), (r = r + a + o), (a = " "));
                              return r;
                          })(e, t)
                        : e && "object" == typeof e
                        ? (function (e) {
                              var t = "",
                                  o = "";
                              for (var n in e) n && e[n] && r.call(e, n) && ((t = t + o + n), (o = " "));
                              return t;
                          })(e)
                        : e || "";
                }
                function a(e) {
                    if (!e) return "";
                    if ("object" == typeof e) {
                        var t = "";
                        for (var o in e) r.call(e, o) && (t = t + o + ":" + e[o] + ";");
                        return t;
                    }
                    return e + "";
                }
                function i(e, t, o, r) {
                    if (!1 === t || null == t || (!t && ("class" === e || "style" === e))) return "";
                    if (!0 === t) return " " + (r ? e : e + '="' + e + '"');
                    var n = typeof t;
                    return (
                        ("object" !== n && "function" !== n) || "function" != typeof t.toJSON || (t = t.toJSON()),
                        "string" == typeof t || ((t = JSON.stringify(t)), o || -1 === t.indexOf('"')) ? (o && (t = s(t)), " " + e + '="' + t + '"') : " " + e + "='" + t.replace(/'/g, "&#39;") + "'"
                    );
                }
                (t.merge = function e(t, o) {
                    if (1 === arguments.length) {
                        for (var r = t[0], n = 1; n < t.length; n++) r = e(r, t[n]);
                        return r;
                    }
                    for (var i in o)
                        if ("class" === i) {
                            var l = t[i] || [];
                            t[i] = (Array.isArray(l) ? l : [l]).concat(o[i] || []);
                        } else if ("style" === i) {
                            l = (l = a(t[i])) && ";" !== l[l.length - 1] ? l + ";" : l;
                            var s = a(o[i]);
                            (s = s && ";" !== s[s.length - 1] ? s + ";" : s), (t[i] = l + s);
                        } else t[i] = o[i];
                    return t;
                }),
                    (t.classes = n),
                    (t.style = a),
                    (t.attr = i),
                    (t.attrs = function (e, t) {
                        var o = "";
                        for (var l in e)
                            if (r.call(e, l)) {
                                var s = e[l];
                                if ("class" === l) {
                                    o = i(l, (s = n(s)), !1, t) + o;
                                    continue;
                                }
                                "style" === l && (s = a(s)), (o += i(l, s, !1, t));
                            }
                        return o;
                    });
                var l = /["&<>]/;
                function s(e) {
                    var t = "" + e,
                        o = l.exec(t);
                    if (!o) return e;
                    var r,
                        n,
                        a,
                        i = "";
                    for (r = o.index, n = 0; r < t.length; r++) {
                        switch (t.charCodeAt(r)) {
                            case 34:
                                a = "&quot;";
                                break;
                            case 38:
                                a = "&amp;";
                                break;
                            case 60:
                                a = "&lt;";
                                break;
                            case 62:
                                a = "&gt;";
                                break;
                            default:
                                continue;
                        }
                        n !== r && (i += t.substring(n, r)), (n = r + 1), (i += a);
                    }
                    return n !== r ? i + t.substring(n, r) : i;
                }
                (t.escape = s),
                    (t.rethrow = function e(t, r, n, a) {
                        if (!(t instanceof Error)) throw t;
                        if (!(("undefined" == typeof window && r) || a)) throw ((t.message += " on line " + n), t);
                        try {
                            a = a || o(993).readFileSync(r, "utf8");
                        } catch (o) {
                            e(t, null, n);
                        }
                        var i = 3,
                            l = a.split("\n"),
                            s = Math.max(n - i, 0),
                            d = Math.min(l.length, n + i);
                        throw (
                            ((i = l
                                .slice(s, d)
                                .map(function (e, t) {
                                    var o = t + s + 1;
                                    return (o == n ? "  > " : "    ") + o + "| " + e;
                                })
                                .join("\n")),
                            (t.path = r),
                            (t.message = (r || "Pug") + ":" + n + "\n" + i + "\n\n" + t.message),
                            t)
                        );
                    });
            },
            594: (e, t, o) => {
                var r = o(379),
                    n = o(27);
                "string" == typeof (n = n.__esModule ? n.default : n) && (n = [[e.id, n, ""]]);
                r(n, { insert: "head", singleton: !1 }), (e.exports = n.locals || {});
            },
            379: (e, t, o) => {
                "use strict";
                var r,
                    n = (function () {
                        var e = {};
                        return function (t) {
                            if (void 0 === e[t]) {
                                var o = document.querySelector(t);
                                if (window.HTMLIFrameElement && o instanceof window.HTMLIFrameElement)
                                    try {
                                        o = o.contentDocument.head;
                                    } catch (e) {
                                        o = null;
                                    }
                                e[t] = o;
                            }
                            return e[t];
                        };
                    })(),
                    a = [];
                function i(e) {
                    for (var t = -1, o = 0; o < a.length; o++)
                        if (a[o].identifier === e) {
                            t = o;
                            break;
                        }
                    return t;
                }
                function l(e, t) {
                    for (var o = {}, r = [], n = 0; n < e.length; n++) {
                        var l = e[n],
                            s = t.base ? l[0] + t.base : l[0],
                            d = o[s] || 0,
                            c = "".concat(s, " ").concat(d);
                        o[s] = d + 1;
                        var u = i(c),
                            p = { css: l[1], media: l[2], sourceMap: l[3] };
                        -1 !== u ? (a[u].references++, a[u].updater(p)) : a.push({ identifier: c, updater: m(p, t), references: 1 }), r.push(c);
                    }
                    return r;
                }
                function s(e) {
                    var t = document.createElement("style"),
                        r = e.attributes || {};
                    if (void 0 === r.nonce) {
                        var a = o.nc;
                        a && (r.nonce = a);
                    }
                    if (
                        (Object.keys(r).forEach(function (e) {
                            t.setAttribute(e, r[e]);
                        }),
                        "function" == typeof e.insert)
                    )
                        e.insert(t);
                    else {
                        var i = n(e.insert || "head");
                        if (!i) throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
                        i.appendChild(t);
                    }
                    return t;
                }
                var d,
                    c =
                        ((d = []),
                        function (e, t) {
                            return (d[e] = t), d.filter(Boolean).join("\n");
                        });
                function u(e, t, o, r) {
                    var n = o ? "" : r.media ? "@media ".concat(r.media, " {").concat(r.css, "}") : r.css;
                    if (e.styleSheet) e.styleSheet.cssText = c(t, n);
                    else {
                        var a = document.createTextNode(n),
                            i = e.childNodes;
                        i[t] && e.removeChild(i[t]), i.length ? e.insertBefore(a, i[t]) : e.appendChild(a);
                    }
                }
                function p(e, t, o) {
                    var r = o.css,
                        n = o.media,
                        a = o.sourceMap;
                    if (
                        (n ? e.setAttribute("media", n) : e.removeAttribute("media"),
                        a && "undefined" != typeof btoa && (r += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(a)))), " */")),
                        e.styleSheet)
                    )
                        e.styleSheet.cssText = r;
                    else {
                        for (; e.firstChild; ) e.removeChild(e.firstChild);
                        e.appendChild(document.createTextNode(r));
                    }
                }
                var f = null,
                    v = 0;
                function m(e, t) {
                    var o, r, n;
                    if (t.singleton) {
                        var a = v++;
                        (o = f || (f = s(t))), (r = u.bind(null, o, a, !1)), (n = u.bind(null, o, a, !0));
                    } else
                        (o = s(t)),
                            (r = p.bind(null, o, t)),
                            (n = function () {
                                !(function (e) {
                                    if (null === e.parentNode) return !1;
                                    e.parentNode.removeChild(e);
                                })(o);
                            });
                    return (
                        r(e),
                        function (t) {
                            if (t) {
                                if (t.css === e.css && t.media === e.media && t.sourceMap === e.sourceMap) return;
                                r((e = t));
                            } else n();
                        }
                    );
                }
                e.exports = function (e, t) {
                    (t = t || {}).singleton || "boolean" == typeof t.singleton || (t.singleton = (void 0 === r && (r = Boolean(window && document && document.all && !window.atob)), r));
                    var o = l((e = e || []), t);
                    return function (e) {
                        if (((e = e || []), "[object Array]" === Object.prototype.toString.call(e))) {
                            for (var r = 0; r < o.length; r++) {
                                var n = i(o[r]);
                                a[n].references--;
                            }
                            for (var s = l(e, t), d = 0; d < o.length; d++) {
                                var c = i(o[d]);
                                0 === a[c].references && (a[c].updater(), a.splice(c, 1));
                            }
                            o = s;
                        }
                    };
                };
            },
            993: () => {},
        },
        t = {};
    function o(r) {
        if (t[r]) return t[r].exports;
        var n = (t[r] = { id: r, exports: {} });
        return e[r](n, n.exports, o), n.exports;
    }
    (o.n = (e) => {
        var t = e && e.__esModule ? () => e.default : () => e;
        return o.d(t, { a: t }), t;
    }),
        (o.d = (e, t) => {
            for (var r in t) o.o(t, r) && !o.o(e, r) && Object.defineProperty(e, r, { enumerable: !0, get: t[r] });
        }),
        (o.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t)),
        (o.r = (e) => {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
        }),
        (() => {
            "use strict";
            o(594),
                (function () {
                    const e = o(152),
                        t = o(425);
                    let r = [],
                        n = null;
                    function a(e) {
                        if (r.length == n.fileLimit || n.fileLimit < r.length + e.length) {
                            const e = `The limit for number of file uploads is ${n.fileLimit}.`,
                                t = $(".modal");
                            return t.find(".modal-body").html(e), void t.modal("show");
                        }
                        let t = $(".queueSrc").html();
                        for (let o = 0; o < e.length; o++) {
                            if (e[o].size > 1048576 * n.sizeLimit) {
                                const t = `\n                    The size limit for individual files is ${n.sizeLimit} MB.\n                    <br><b>${e[o].name}</b> is ${(e[o].size / 1048576).toFixed(1)} MB.`,
                                    r = $(".modal");
                                return r.find(".modal-body").html(t), void r.modal("show");
                            }
                            $("<div class='row fileQueue'></div>").html(t).find(".col.name b").text(e[o].name).end().find(".remove input").attr("data-name", e[o].name).end().insertAfter(".row.ddHandler").animate({ opacity: 1 }, 850),
                                r.push(e[o]);
                        }
                        $(".row.submit").css("display", "flex");
                    }
                    $.fn.initUploader = function (o) {
                        
                        let i = { destination: null, destinationParams: null, sizeLimit: 1, fileLimit: 5, selectOpts: null, showDescription: !1, postFn: $.noop };
                        n = $.extend({}, i, o);
                        const l = { showDesc: n.showDescription, options: n.selectOpts },
                            s = e(l),
                            d = t();
                        this.html(s),
                            $("body").append(d),
                            n.destinationParams && (n.destination = `${n.destination}?${$.param(n.destinationParams)}`),
                            this.on("click change", "input[value]", (e) => {
                                "Remove" == e.currentTarget.attributes.value.nodeValue
                                    ? (function (e) {
                                          r = r.filter((t) => t.name !== e.attributes["data-name"].value);
                                          let t = $(e).closest(".row");
                                          t.animate({ opacity: 0 }, 400, () => t.remove()), $(".row.submit").css("display", () => (r.length ? "flex" : "none"));
                                      })(e.currentTarget)
                                    : "Upload" == e.currentTarget.attributes.value.nodeValue
                                    ? (function () {
                                          let e = new FormData(),
                                              t = 0;
                                          const o = $(".row.ulProgress .progress-bar"),
                                              a = $(".row.fileQueue");
                                          n.selectOpts && ((File.prototype.fileType = ""), r.map((e) => ((e.fileType = a.filter(`:has(input[data-name='${e.name}'])`).find(".col.desc input").val()), e))),
                                              n.showDescription && ((File.prototype.description = ""), r.map((e) => ((e.description = a.filter(`:has(input[data-name='${e.name}'])`).find(".col.options select").val()), e))),
                                              r.forEach((t) => e.append("file[]", t)),
                                              a.animate({ opacity: 0 }, 400, () => {
                                                  $(".row.ddHandler").css("opacity", 0), $(".row.submit").hide(), $(".row.ulProgress").show();
                                              }),
                                              setTimeout(() => {
                                                  $.ajax({
                                                      xhr: () => {
                                                          let e = $.ajaxSettings.xhr();
                                                          return (
                                                              e.upload &&
                                                                  e.upload.addEventListener(
                                                                      "progress",
                                                                      (e) => {
                                                                          let r = e.loaded || e.position;
                                                                          e.lengthComputable && ((t = Math.ceil((r / e.total) * 100)), o.css("width", t + "%").text(t + "%"));
                                                                      },
                                                                      !1
                                                                  ),
                                                              e
                                                          );
                                                      },
                                                      url: n.destination,
                                                      type: "POST",
                                                      contentType: !1,
                                                      processData: !1,
                                                      data: e,
                                                      success: (e, t, o) => {
                                                          a.remove(), $(".row.ddHandler").css("opacity", 100), $(".row.ulProgress").hide(), (r = []);
                                                          const i = $(".modal");
                                                          i.find(".modal-body").text(`File${1 == r.length ? "" : "s"} successfully uploaded`), setTimeout(() => i.modal("show"), 70), n.postFn.call();
                                                      },
                                                      error: (e, t, o) => {
                                                          $(".row.ddHandler").css("opacity", 100), a.css("opacity", 100), $(".row.ulProgress").hide(), $(".row.submit").show();
                                                          const n = $(".modal");
                                                          let i = "There was an error uploading the file" + (1 == r.length ? "" : "s");
                                                          (i += o.length ? `<br><i>${o}</i>` : ""), n.find(".modal-body").html(i), setTimeout(() => n.modal("show"), 70);
                                                      },
                                                  });
                                              }, 450);
                                      })()
                                    : "change" == e.type && a($(e.currentTarget).get(0).files);
                            }).on("dragenter drop dragover dragleave", "#dragandrophandler", (e) => {
                                switch ((e.stopPropagation(), e.preventDefault(), e.type)) {
                                    case "dragenter":
                                        e.target.classList.add("active");
                                        break;
                                    case "dragleave":
                                        e.target.classList.remove("active");
                                        break;
                                    case "drop":
                                        e.target.classList.remove("active"), a(e.originalEvent.dataTransfer.files);
                                }
                            });
                    };
                })();
        })();
})();
