var c = Object.defineProperty;
var n = (s, e, i) => e in s ? c(s, e, { enumerable: !0, configurable: !0, writable: !0, value: i }) : s[e] = i;
var t = (s, e, i) => (n(s, typeof e != "symbol" ? e + "" : e, i), i);
class r {
  constructor(e) {
    t(this, "hooks", {});
    t(this, "handle");
    this.handle = e;
  }
  fire(e) {
    this.hooks[e].forEach((i) => {
      this.handle = i.callback(this.handle);
    });
  }
  on(e, i) {
    this.hooks[e] = this.hooks[e] || [], this.hooks[e].push({ hook: e, callback: i });
  }
}
class h {
  constructor() {
    t(this, "instances", {});
  }
  register(e, i) {
    return this.instances[i] = e, this;
  }
  resolve(e) {
    return this.instances[e] || null;
  }
}
const l = (s) => new r(s), o = (s, e) => new h().register(e, s);
typeof window < "u" && (window.lifecycle = l, window.lifecycleRegistry = o);
export {
  l as createLifecycle,
  o as createLifecycleRegistry
};
