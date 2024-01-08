class Solution(object):
    def minWindow(self, s, t):
        countT = {}
        window = {}
        res = [-1, -1]
        resLen = float("infinity")
        for c in t:
            countT[c] = countT.get(c, 0) + 1
        have = 0
        need = len(countT)
        l = 0
        for r in range(len(s)):
            c = s[r]
            window[c] = window.get(c, 0) + 1
            if c in countT and window[c] == countT[c]:
                have += 1
            while have == need:
                curWinSize = r - l + 1
                if resLen > curWinSize:
                    resLen = curWinSize
                    res = [l, r]
                window[s[l]] -= 1
                if s[l] in countT and window[s[l]] < countT[s[l]]:
                    have -= 1
                l += 1
        l, r = res
        return s[l:r+1] if resLen != float("infinity") else ""
