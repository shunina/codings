class Solution:
    def mergeAlternately(self, word1: str, word2: str) -> str:
        if len(word1) < len(word2):
            main = word2
        else:
            main = word1
        new = ''
        for i in range(len(main)):
            if i < len(word1):
                new += word1[i]
            if i < len(word2):
                new += word2[i]
        return new
