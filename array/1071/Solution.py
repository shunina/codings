class Solution:
    def gcdOfStrings(self, str1: str, str2: str) -> str:
        # i = 0
        # stringToReturn = ""
        # minLength = min(len(str1), len(str2)) - 1
        # while True:
        #     if i > minLength:
        #         break
        #     if str1[i] == str2[i]:
        #         stringToReturn += str1[i]
        #         i += 1
        #         continue
        # return stringToReturn
        if str1 + str2 != str2 + str1:
            return ""
        if len(str1) == len(str2):
            return str1
        if len(str1) > len(str2):
            return self.gcdOfStrings(str1[len(str2) :], str2)
        return self.gcdOfStrings(str1, str2[len(str1) :])
